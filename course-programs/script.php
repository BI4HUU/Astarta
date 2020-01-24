<script type="text/javascript">(function(d, w, s) { var widgetHash = '89trfzmrggbsexn8j5n7', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true; gcw.src = 'https://widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js'; var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);  })(document, window, 'script');
</script>

<script>
if (document.getElementsByClassName("body-article")[0]) {
	var bodyArticle = document.getElementsByClassName("body-article")[0];
	var bodyArticleCard = bodyArticle.getElementsByClassName("card")[0];
	var bodyArticleCardRow = bodyArticleCard.parentElement;
	bodyArticleCardRow.classList.remove("row");
	var bodyArticleContainer = bodyArticle.getElementsByClassName("container")[0];
	bodyArticleContainer.classList.remove("pt-2");
	bodyArticleContainer.classList.remove("pt-md-3");
	bodyArticleContainer.classList.remove("container");
	bodyArticleCard.classList.remove("mt-1");
	bodyArticleCard.classList.remove("mt-md-2");
	bodyArticleCard.classList.remove("mt-lg-3");
	bodyArticle.classList.remove("pt-4");
	bodyArticle.classList.remove("pt-md-5");
}
</script>
<script>
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
</script>