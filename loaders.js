   document.onreadystatechange = function() {
			setTimeout(function() {
            if (document.readyState !== "complete") {
                document.querySelector(
                  "body").style.visibility = "hidden";
                document.querySelector(
                  "#preloader").style.visibility = "visible";
            } else {
                document.querySelector(
                  "#preloader").style.display = "none";
                document.querySelector(
                  "body").style.visibility = "visible";
            }
			}, 3000);
        };
