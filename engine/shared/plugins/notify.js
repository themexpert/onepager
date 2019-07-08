import "../../../assets/css/toastr.css";

toastr.options = {
	"closeButton"      : true,
	"newestOnTop"      : true,
	"progressBar"      : true,
	"positionClass"    : "toast-top-right",
	"preventDuplicates": false,
	"showDuration"     : "3000",
	"hideDuration"     : "3000",
	"timeOut"          : "3000",
	"extendedTimeOut"  : "1000"
};

export default toastr;
