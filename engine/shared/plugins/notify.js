import "../../../assets/css/toastr.css";

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

export default toastr;
