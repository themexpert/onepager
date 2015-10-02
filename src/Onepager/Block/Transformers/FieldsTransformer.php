<?php namespace ThemeXpert\Onepager\Block\Transformers;

class FieldsTransformer {

  public function transform( $fields ) {
    return array_map( function ( $control ) {
      $control = $this->mergeOptionsData( $control);

      //obligatory name
      $name = array_key_exists( 'name', $control ) ? $control['name'] : "";

      //optional
      $type = isset( $control['type'] ) ? $control['type'] : "text";
      if ( "colorpicker" === $type ) {
        $control['type'] = "color";
      }
      if ( "switch" === $type ) {
        $control['value'] = array_key_exists('value', $control) ? (bool) $control['value'] : false;
      }

      switch ( $type ) {
        case 'divider':
          $default = array(
            'label' => 'divider',
          );
          break;
        case 'note':
          $default = array(
            'text' => 'note',
          );
          break;
        case 'link':
          $default = array(
            "label"       => ucfirst( $name ),
            "class"       => "{$name}-control",
            'value' => array(
              'url'    => array_get( $control, 'url', '' ),
              'text'   => array_get( $control, 'text', '' ),
              'target' => array_get( $control, 'target', false ),
            ),
          );
          break;

        case 'repeater':
          $control['fields'] = array_map( function ( $control ) {
            return $this->transform( $control );
          }, $control['fields'] );

          $default = array(
            "label"  => ucfirst( $name ),
            "type"   => "repeater",
            "class"  => "{$name}-control",
            "help"   => "",
            "fields" => array(),
          );

          break;
        default:
          $default = array(
            "placeholder" => ucfirst( $name ),
            "label"       => ucfirst( $name ),
            "class"       => "{$name}-control",
            "type"        => $type, //default type is text
            "help"        => "",
            "value"       => '',
          );


          //because react-bootstrap expects addonAfter
          //append is just a syntactical sugar
          if ( array_key_exists( 'append', $control ) ) {
            $default['addonAfter'] = $control['append'];
          }

          //because react-bootstrap expects addonBefore
          //prepend is just a syntactiacal sugar
          if ( array_key_exists( 'prepend', $control ) ) {
            $default['addonBefore'] = $control['prepend'];
          }
      }


      $control = array_merge( $default, $control );

      return $control;
    }, $fields );
  }

  /**
   * @param $control
   *
   * @return mixed
   */
  public function mergeOptionsData( $control ) {
    $value = array_key_exists( 'value', $control ) ? $control['value'] : '';

    if ( is_string( $value ) && startsWith( $value, '@' ) ) {
      //for complex use I do not know yet
      $control['global'] = $value;
      $control['value'] = $this->getOptionData($value );
    }

    return $control;
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
}
