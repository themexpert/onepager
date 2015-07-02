<?php namespace ThemeXpert\Onepager\Block\Transformers;

class FieldsTransformer {

  public function transform( $fields ) {
    return array_map( function ( $control ) {
      //obligatory name
      $name = array_key_exists( 'name', $control ) ? $control['name'] : "";

      //optional
      $type = isset( $control['type'] ) ? $control['type'] : "text";

      $default = array();

      switch ( $type ) {
        case 'divider':
          $default = array(
            'label' => 'divider'
          );
          break;

        case 'repeater':
          $control['fields'] = array_map(function($control){
            return $this->transform($control);
          }, $control['fields']);

          $default = array(
            "label"  => ucfirst( $name ),
            "type"   => "repeater",
            "class"  => "{$name}-control",
            "help"   => "",
            "fields" => array()
          );

          break;

        default:
          $default = array(
            "placeholder" => ucfirst( $name ),
            "label"       => ucfirst( $name ),
            "type"        => $type, //default type is text
            "class"       => "{$name}-control",
            "help"        => "",
            "value"       => ""
          );


          //because react-bootstrap expects addonAfter
          //append is just a syntactiacal sugar
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
