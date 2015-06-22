<?php namespace ThemeXpert\Onepager\Block\Transformers;

class FieldsTransformer {

  public function transform( $fields ) {
    return array_map( function ( $control ) {
      //obligatory name
      $name = array_key_exists( 'name', $control ) ? $control['name'] : "";

      //optional
      $type = isset( $control['type'] ) ? $control['type'] : "text";

      if(endsWith($type, '-repeater')){
        $inner = substr($type, 0, strpos($type, '-repeater'));
        $type = "repeater";
      }

      $default = array();

      switch ( $type ) {
        case 'divider':
          $default = array(
            'label' => 'divider'
          );
          break;

        case 'repeater':

          $default = array(
            "label"  => ucfirst( $name ),
            "type"   => "repeater",
            "class"  => "{$name}-control",
            "help"   => "",
            "fields" => [ ]
          );

          if(isset($inner)){
            $default['inner'] = $inner;
            $control['fields'] = [$control];
          }

          $control['fields'] = $this->transform( $control['fields'] );
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

          if ( array_key_exists( 'append', $control ) ) {
            $default['addonAfter'] = $control['append'];
          }

          if ( array_key_exists( 'prepend', $control ) ) {
            $default['addonBefore'] = $control['prepend'];
          }
      }


      $control = array_merge( $default, $control );

      //HACK
      if ( array_key_exists( 'fields', $control ) ) {
        $control['fields'] = [ $control['fields'] ];
      }

      return $control;
    }, $fields );
  }

}
