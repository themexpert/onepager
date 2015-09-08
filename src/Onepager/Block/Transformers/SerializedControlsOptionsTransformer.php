<?php namespace ThemeXpert\Onepager\Block\Transformers;


class SerializedControlsOptionsTransformer extends SerializedControlsConfigTransformer {
  public function isGlobalControl( $control ) {
    $value = array_get( $control, 'global', null );

    return is_string( $value ) && startsWith( $value, '@' ) ? true : false;
  }

  /**
   * @param $value
   *
   * @return mixed
   */
  public function getOptionData($value ) {
    $option = str_replace( '@', '', $value );

    $pieces = explode( ".", $option );
    if ( count( $pieces ) == 2 ) {
      $options = \Onepager::getOption( $pieces[0] );

      if ( is_array( $options ) && array_key_exists( $pieces[1], $options ) ) {
        return $options[ $pieces[1] ];
      } else {
        return "";
      }
    } else {
      return \Onepager::getOption( $option );
    }
  }


  public function getSimpleControlValue( $tab, $control ) {
    //if this control is just added into the config file and not saved yet
    if ( ! array_key_exists( $control['name'], $tab ) ) {
      return $this->getOptionData($control['global']);
    }

    $value = $tab[ $control['name'] ];

    if ( $this->isGlobalControl( $control ) && $value == $control['value']) {
      return $this->getOptionData($control['global']);
    }

    //if we are here that means we have this value persisted into database
    return $value;
  }
}
