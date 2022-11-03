$(document).ready(function () {
	function ktUsername() {
		var ten = $('#txtUsername').val();
		var mau = /^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/;
		if (ten === '') {
			$('#spUsername').html('Không được để trống');
			return false;
		}
		if (!mau.test(ten)) {
			$('#spUsername').html('Chữ hoặc số độ dài từ 8-20 ký tự');
			return false;
		}
		$('#spUsername').html('');
		return true;
	}
	$('#txtUsername').blur(ktUsername);

	function ktEmail() {
		var ten = $('#txtEmail').val();
		var mau = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)+(\.\w{2,3})+$/;
		if (ten === '') {
			$('#spEmail').html('Không được để trống');
			return false;
		}
		if (!mau.test(ten)) {
			$('#spEmail').html('Vui lòng điền đúng đính dạng mail');
			return false;
		}
		$('#spEmail').html('');
		return true;
	}
	$('#txtEmail').blur(ktEmail);

	function ktPassword() {
		var ten = $('#txtPassword').val();
		var mau = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$#!%*?&]{6,}$/;
		if (ten === '') {
			$('#spPassword').html('Không được để trống');
			return false;
		}
		if (!mau.test(ten)) {
			$('#spPassword').html('Phải có chữ lẫn số độ dài tối thiểu 6 ký tự');
			return false;
		}
		$('#spPassword').html('');
		return true;
	}
	$('#txtPassword').blur(ktPassword);

	$('#send').click(function () {
		if (
			!(ktUsername() === true && ktEmail() === true && ktPassword() === true)
		) {
			$('form').submit(function (e) {
				alert('Vui lòng nhập đúng thông tin');
				e.preventDefault(e);
			});
		}
	});

	$('#login').click(function () {
		if (!(ktUsername() === true && ktPassword() === true)) {
			$('form').submit(function (e) {
				alert('Vui lòng nhập đúng thông tin');
				e.preventDefault(e);
			});
		}
	});
});
