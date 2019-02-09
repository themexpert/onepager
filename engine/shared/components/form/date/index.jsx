import _ from 'lodash';
import React from 'react';

let DatePicker = React.createClass({

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
   * Init bootstrap-datepicker
   * 
   * @see https://bootstrap-datepicker.readthedocs.io/en/stable/markup.html
   */
  componentDidMount() {
    var self = this;

    jQuery("#" + self.state.id).datepicker('update', self.props.defaultValue);

    jQuery("#" + self.state.id).on('changeDate', function () {
      jQuery("#" + self.state.id + "-value").val(
        jQuery("#" + self.state.id).datepicker('getFormattedDate')
      );

      self.handleChnage(jQuery("#" + self.state.id).datepicker('getFormattedDate'));
    });
  },

  /**
   * Get datepicker value from local state.
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
            <input
                id={this.state.id}
                className="uk-input uk-form-width-large"
                data-date={this.props.defaultValue}
              />
          </div>
        </div>
      </div>
    )
  }
});

export default DatePicker;
