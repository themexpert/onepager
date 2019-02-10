import _ from 'lodash';
import React from 'react';

let TimePicker = React.createClass({

  /**
   * Defualt props.
   */
  propTypes: {
   //
  },

  /**
   * Get initial local state.
   */
  getInitialState() {
    return {
      id: _.uniqueId('onepager-datepicker-'),
      value: ''
    }
  },

  /**
   * Init bootstrap-timepicker
   * 
   * @see http://jdewit.github.io/bootstrap-timepicker/
   */
  componentDidMount() {
    var self = this;

    jQuery("#" + self.state.id).timepicker('setTime', self.props.defaultValue);

    jQuery("#" + self.state.id).on('changeTime.timepicker', function (e) {
      jQuery("#" + self.state.id + "-value").val(
        e.target.value
      );

      self.handleChnage(e.target.value);
    });
  },

  /**
   * Get timepicker value from local state.
   */
  getValue() {
   return this.state.value;
  },

  /**
   * Update local & onepager state.
   * 
   * @param {string} value 
   */
  handleChnage(value) {
    this.setState({ value })
    this.props.onChange();
  },

  /**
   * Rendering jsx.
   */
  render() {
    return (
      <div className="uk-form-stacked">
        <label className="uk-form-label">{this.props.label}</label>

        <div className="uk-margin-small-top">
          <div className="uk-inline">
            <span className="uk-form-icon" data-uk-icon="icon: future"></span>
            <input type={this.state.id} defaultValue={this.props.defaultValue} ref={this.state.id} type="hidden" id={this.state.id + "-value"} />
            <div class="input-group bootstrap-timepicker timepicker">
              <input id={this.state.id} class="form-control" data-provide="timepicker" data-minute-step="1" data-modal-backdrop="true" type="text"/>
            </div>
          </div>
        </div>
      </div>
    )
  }
});

export default TimePicker;
