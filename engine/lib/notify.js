require("../../assets/css/toastr.css");

toastr.options = {
  "closeButton"      : true,
  "newestOnTop"      : true,
  "progressBar"      : true,
  "positionClass"    : "toast-top-right",
  "preventDuplicates": false,
  "showDuration"     : "300",
  "hideDuration"     : "1000",
  "timeOut"          : "1000",
  "extendedTimeOut"  : "1000"
};

// let toastr = {
// 	success: function(msg){
// 		console.log(msg);
// 	},
// 	warning: function(msg){
// 		console.log(msg);
// 	}
// };

module.exports = toastr;
