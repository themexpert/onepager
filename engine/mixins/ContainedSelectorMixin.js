/**
 * Created by na on 5/13/15.
 */
const React = require('react');

module.exports = {
  getContainerReactId(){
    let el = React.findDOMNode(this.refs.container);
    if (!el) return false;

    let reactId = el.getAttribute('data-reactid');

    return reactId;
  },

  getSelector(selector){
    let reactId = this.getContainerReactId();

    return "[data-reactid='" + reactId + "']" + " " + selector;
  }
};
