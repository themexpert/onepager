<?php namespace ThemeXpert\Onepager\Block\Transformers;

class SettingsTransformer {

  public function transform( $settings ) {
    return array_map( function ( $control ) {

      //obligatory name
      $name = array_key_exists( 'name', $control ) ? $control['name'] : "";
      $type = array_key_exists( 'type', $control ) ? $control['type'] : "text";


      switch ( $type ) {
        case 'divider':
          $default = array(
            'label' => 'divider'
          );
          break;

        default:
          $default = array(
            "tab"         => "general", //default tab is general
            "type"        => "text", //default type is text
            "placeholder" => ucfirst( $name ),
            "label"       => ucfirst( $name ),
            "help"        => "",
            "class"       => "{$name}-control",
            "value"       => ""
          );
      }

      return array_merge( $default, $control );
    }, $settings );
  }

}
