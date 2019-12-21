function togle_menu() {
	document.getElementsByTagName("nav")[0].classList.toggle("d-flex")
	document.getElementsByClassName("burger")[0].classList.toggle("burger_close")
}
function togle_answer(_this) {
	_this.getElementsByTagName("h5")[0].classList.toggle("h5_show")
	var dsad = _this.getElementsByClassName("answer_wrap_item_p")[0].style.height;
	_this.getElementsByClassName("arrow")[0].classList.toggle("arrow_show");
	if (Number(dsad.replace(/[^\d;]/g, '')) == 0) {
		_this.getElementsByClassName("answer_wrap_item_p")[0].style.height = (_this.getElementsByTagName("p")[0].clientHeight + 18) + "px";
	} else {
		_this.getElementsByClassName("answer_wrap_item_p")[0].style.height = 0;
	};
}