<?php namespace ThemeXpert\Onepager\Block\Transformers;


class SerializedControlsConfigTransformer {
  /**
   * @param $rGroupDataStructure
   * @param $rGroups
   *
   * @return array
   */
  public function partialDataStructureChangeMerge( $rGroupDataStructure, $rGroups ) {
    return array_map( function ( $rGroup ) use ( $rGroupDataStructure ) {
      return array_merge( $rGroupDataStructure, $rGroup );
    }, $rGroups );
  }

  /**
   * @param $rGroupDataStructure
   *
   * @return mixed
   */
  public function getRepeatGroupDataStructure( $rGroupDataStructure ) {
    return array_reduce( $rGroupDataStructure, function ( $carry, $control ) {
      $carry[ $control['name'] ] = $control['value'];

      return $carry;
    }, [ ] );
  }

  /**
   * @param $controlFields
   *
   * @return mixed
   */
  public function getDefaultRepeatGroups( $controlFields ) {
    return array_map( function ( $rGroup ) {
      return array_reduce( $rGroup, function ( $carry, $control ) {
        $carry[ $control['name'] ] = $control['value'];

        return $carry;
      }, [ ] );
    }, $controlFields );
  }

  /**
   * @param $tab
   * @param $control
   *
   * @return array|mixed
   */
  public function getRepeaterControlValue( $tab, $control ) {
    /**
     * if a repeater is added in the config file but not saved yet
     * we will extract the values from the config file
     */
    if ( ! array_key_exists( $control['name'], $tab ) ) {
      return $this->getDefaultRepeatGroups( $control['fields'] );
    }

    /**
     * a new control might be added to the repeater that is not persisted
     * so we will merge the config values with persisted values
     * to do this we will need a data structure that we will merge with other
     * repeat groups of this repeater
     */
    if ( ! isset( $control['fields'][0] ) ) {
      //FIXME: why empty array ?
      return array();
    }

    $rGroupDataStructure = $this->getRepeatGroupDataStructure( $control['fields'][0] );

    return $this->partialDataStructureChangeMerge( $rGroupDataStructure, $tab[ $control['name'] ] );
  }

  /**
   * @param $control
   * @param $tab
   *
   * @return mixed
   */
  public function getSimpleControlValue( $tab, $control ) {
    //if this control is just added into the config file and not saved yet
    if ( ! array_key_exists( $control['name'], $tab ) ) {
      return $control['value'];
    }

    //if we are here that means we have this value persisted into database
    return $tab[ $control['name'] ];
  }

  /**
   * @param $configData
   * @param $serializedData
   *
   * @return mixed
   */
  public function mergePersistedDataAndConfigData( $configData, $serializedData ) {
    /**
     * We will have varying types of controls
     * so we will need varying types of data merging
     * algorithms
     */
    $data = array_reduce( $configData, function ( $carry, $control ) {
      // Return if control type is divider
      if ( in_array( $control['type'], [ "divider", "note" ] ) ) {
        return $carry;
      }

      $name = $control['name'];

      switch ( $control['type'] ) {
        case 'repeater':
          $carry[ $name ] = $this->getRepeaterControlValue( $carry, $control );
          break;
        default:
          $carry[ $name ] = $this->getSimpleControlValue( $carry, $control );
          break;
      }

      return $carry;
    }, $serializedData );

    return $data;
  }

}
