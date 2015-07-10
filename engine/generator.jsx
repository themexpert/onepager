require('../assets/css/animate.css');
require('../assets/css/lithium.css');

const React     = require('react');
const Generator = require('./Generator/Generator.jsx');
const mount     = document.getElementById('generator-mount');

React.render(<Generator />, mount);
