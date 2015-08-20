<?php namespace ThemeXpert\Onepager\Block\Transformers;

class FieldsTransformer {

  public function transform( $fields ) {
    return array_map( function ( $control ) {

      $value = array_key_exists( 'value', $control ) ? $control['value'] : '';
      if ( is_string( $value ) && startsWith( $value, '@' ) ) {
        $option = str_replace( '@', '', $value );

        $pieces = explode( ".", $option );
        if ( count( $pieces ) == 2 ) {
          $options = \Onepager::getOption( $pieces[0] );

          if ( is_array( $options ) && array_key_exists( $pieces[1], $options ) ) {
            $control['value'] = $options[ $pieces[1] ];
          } else {
            $control['value'] = "";
          }
        } else {
          $control['value'] = \Onepager::getOption( $option );
        }
      }

      //obligatory name
      $name = array_key_exists( 'name', $control ) ? $control['name'] : "";

      //optional
      $type = isset( $control['type'] ) ? $control['type'] : "text";
      if ( "colorpicker" === $type ) {
        $control['type'] = "color";
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
            "type"        => $type, //default type is text
            "class"       => "{$name}-control",
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

}
