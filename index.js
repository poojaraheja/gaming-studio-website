const All_Details = document.querySelectorAll("details");

All_Details.forEach((deet) => {
	deet.addEventListener("toggle", toggleOpenOneOnly);
});

function toggleOpenOneOnly(e) {
	if (this.open) {
		All_Details.forEach((deet) => {
			if (deet != this && deet.open) deet.open = false;
		});
	}
}
function reveal() {
	var reveals = document.querySelectorAll(".reveal");

	for (var i = 0; i < reveals.length; i++) {
		var windowHeight = window.innerHeight;
		var elementTop = reveals[i].getBoundingClientRect().top;
		var elementVisible = 150;

		if (elementTop < windowHeight - elementVisible) {
			reveals[i].classList.add("active");
		} else {
			reveals[i].classList.remove("active");
		}
	}
}

window.addEventListener("scroll", reveal);
