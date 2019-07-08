import swal from 'sweetalert';

export default function (name) {
	swal(
		{
			title: "Are you sure?",
			text: `You will not be able to recover this ${name} ! `,
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Yes, delete it!",
			closeOnConfirm: false
		},
		function () {
			swal( "Deleted!", `Your ${name} has been deleted.` );
		}
	);
}
