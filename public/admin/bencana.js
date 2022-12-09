$(document).ready(function () {
	$("#formsimpandaneditbencana").hide();

	// bencana
	/*--first time load--*/
	ajaxlist((page_url = false));

	/*-- Search keyword--*/
	$(document).on("keyup", "#search_key", function (event) {
		ajaxlist((page_url = false));
		event.preventDefault();
	});

	/*-- Reset Search--*/
	$(document).on("click", "#resetBtn", function (event) {
		$("#search_key").val("");
		ajaxlist((page_url = false));
		event.preventDefault();
	});

	/*-- Page click --*/
	$(document).on("click", ".uk-pagination li a", function (event) {
		var page_url = $(this).attr("href");
		ajaxlist(page_url);
		event.preventDefault();
	});

	/*-- create function ajaxlist --*/
	function ajaxlist(page_url = false) {
		var search_key = $("#search_key").val();
		var url = base_url + "administrator/tampilBencana";
		var dataString = "search_key=" + search_key;
		if (page_url == false) {
			var page_url = url;
		}

		$.ajax({
			type: "POST",
			url: page_url,
			data: dataString,
			beforeSend: function () {
				$(".loading").show();
			},
			success: function (response) {
				console.log(response);
				$("#ajaxBencana").html(response);
				$(".loading").fadeOut("slow");
			},
		});
	}
	// bencana

	$("body").on("click", "#tambahmodal", function (e) {
		e.preventDefault();
		$("#formsimpandaneditbencana").show().fadeIn(3000);
		$("#tampilbencanasemua").hide().fadeOut(3000);

		$("#kecamatanbencana").val("");
		$("#lokasibencana").val("");
		$("#latitudebencana").val("");
		$("#longitudebencana").val("");
		$("#radius").val("");

		$("#kategori").val("0");
		$("#keteranganbencana").val("0");

		$("#simpandata").text("Simpan Data");
		$("#submiteditdata").attr("id", "submitdata");
		$("#uploadPreview").attr("src", base_url + "public/img/no.png");
	});

	$("body").on("click", "#formedit", function (e) {
		e.preventDefault();

		var id = $(this).data("id");
		var kecamatan = $(this).data("kecamatan");
		var lokasi = $(this).data("lokasi");
		var latitude = $(this).data("latitude");
		var longitude = $(this).data("longitude");
		var keterangan = $(this).data("keterangan");
		var kategori = $(this).data("kategori");
		var radius = $(this).data("radius");

		$("#idbencana").val(id);
		$("#kecamatanbencana").val(kecamatan);
		$("#lokasibencana").val(lokasi);
		$("#keteranganbencana").val(keterangan);
		$("#latitudebencana").val(latitude);
		$("#longitudebencana").val(longitude);
		$("#kategori").val(kategori);
		$("#radius").val(radius);

		$("#formsimpandaneditbencana").show().fadeIn(3000);
		$("#tampilbencanasemua").hide().fadeOut(3000);

		$("#simpandata").text("Edit bencana");
		$("#submitdata").attr("id", "submiteditdata");
	});

	$("body").on("submit", "#submitdata", function (e) {
		e.preventDefault();

		var kecamatan = $("#kecamatanbencana").val();
		var lokasi = $("#lokasibencana").val();
		var keterangan = $("#keteranganbencana").val();
		var latitude = $("#latitudebencana").val();
		var longitude = $("#longitudebencana").val();
		var kategori = $("#kategori").val();
		var radius = $("#radius").val();

		if (kecamatan == "") {
			UIkit.notification({
				message: '<span uk-icon="icon: close"></span> Kecamatan masih Kosong!',
				status: "danger",
				pos: "top-right",
				timeout: 1000,
			});

			$("#kecamatanbencana").focus();
		} else if (lokasi == "") {
			UIkit.notification({
				message: '<span uk-icon="icon: close"></span> Lokasi masih Kosong!',
				status: "danger",
				pos: "top-right",
				timeout: 1000,
			});

			$("#lokasibencana").focus();
		} else if (keterangan == "") {
			UIkit.notification({
				message: '<span uk-icon="icon: close"></span> Keterangan masih Kosong!',
				status: "danger",
				pos: "top-right",
				timeout: 1000,
			});

			$("#keteranganbencana").focus();
		} else if (latitude == "") {
			UIkit.notification({
				message: '<span uk-icon="icon: close"></span> latitude masih Kosong!',
				status: "danger",
				pos: "top-right",
				timeout: 1000,
			});

			$("#latitudebencana").focus();
		} else if (longitude == "") {
			UIkit.notification({
				message: '<span uk-icon="icon: close"></span> longitude masih Kosong!',
				status: "danger",
				pos: "top-right",
				timeout: 1000,
			});

			$("#longitudebencana").focus();
		} else if (kategori == "0") {
			UIkit.notification({
				message: '<span uk-icon="icon: close"></span> kategori masih Kosong!',
				status: "danger",
				pos: "top-right",
				timeout: 1000,
			});

			$("#kategori").focus();
		} else {
			$.ajax({
				url: base_url + "savedatabencana",
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				beforeSend: function () {
					$("#simpandata").html("Loading...");
				},
				success: function (data) {
					$("#simpandata").html("Simpan Bencana");
					ajaxlist((page_url = false));
					UIkit.notification({
						message:
							'<span uk-icon="icon: check"></span> Data berhasil tersimpan!',
						status: "success",
						pos: "top-right",
						timeout: 1000,
					});
					$("#formsimpandaneditbencana").hide().fadeOut(3000);
					$("#tampilbencanasemua").show().fadeIn(3000);
				},
			});
		}
	});

	$("body").on("click", "#hapusdata", function (e) {
		e.preventDefault();
		var id = $(this).data("id");

		swal({
			title: "Apakah Anda Yakin?",
			text: "akan terhapus permanen!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		}).then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type: "POST",
					url: base_url + "hapusbencana",
					data: { id: id },
					dataType: "text",
					success: function (data) {
						ajaxlist((page_url = false));
					},
				});
				swal("Berhasil! Data sudah terhapus!", {
					icon: "success",
				});
			} else {
				swal("Data anda masih aman!");
			}
		});
	});
	$("body").on("submit", "#submiteditdata", function (e) {
		e.preventDefault();
		$.ajax({
			url: base_url + "editdatabencana",
			type: "post",
			data: new FormData(this),
			processData: false,
			contentType: false,
			cache: false,
			async: false,
			beforeSend: function () {
				$("#simpandata").html("Loading...");
			},
			success: function (data) {
				ajaxlist((page_url = false));
				UIkit.notification({
					message: '<span uk-icon="icon: check"></span> Data berhasil teredit!',
					status: "success",
					pos: "top-right",
					timeout: 1000,
				});
				$("#formsimpandaneditbencana").hide().fadeOut(3000);
				$("#tampilbencanasemua").show().fadeIn(3000);
				$("#simpandata").text("Simpan Data");
				$("#submiteditdata").attr("id", "submitdata");
			},
		});
	});

	$("#kembalikeawal").click(function (e) {
		e.preventDefault();

		$("#judulbencana").val("");

		$("#gbrbencana").val("");
		$("#idbencana").val("");

		$("#simpandata").text("Simpan Data");
		$("#submiteditdata").attr("id", "submitdata");
		$("#uploadPreview").attr("src", base_url + "public/img/no.png");
		$("#formsimpandaneditbencana").hide().fadeOut(3000);
		$("#tampilbencanasemua").show().fadeIn(3000);
	});
});
