const React = require('react');
const App = require('./components/App.jsx');

require("underscore");
require("./lib/_mixins");


React.render(<App />, document.getElementById('onepager-mount'));

jQuery(function ($) {
  console.log("we are here");

  $(document).on(
    "click",
    "#wp-admin-bar-op-add-block",
    ()=> {
      $("#react-add-block")[0].click();
    }
  );
});
