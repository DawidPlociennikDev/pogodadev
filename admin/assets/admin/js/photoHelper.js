window.addEventListener('load', function () {
    document.getElementById('photo').addEventListener('change', function () {
        document.getElementById('photoViewer').innerHTML = '<i class="fas fa-spinner fa-pulse loader"></i>';

        if (this.files && this.files[0]) {
            img = URL.createObjectURL(this.files[0]);
            setTimeout(function () {
                document.getElementById('photoViewer').innerHTML = ' \
                <div class="remove-button" onclick="removePhoto(\'photoViewer\')"> \
                	<i class="fas fa-times"></i> \
                </div> \
                <img class="img-fluid img-thumbnail" src="' + img + '" width="120">';
            }, 500);
        }
    });
});

window.addEventListener('load', function () {
    document.getElementById('logo').addEventListener('change', function () {
        document.getElementById('logoViewer').innerHTML = '<i class="fas fa-spinner fa-pulse loader"></i>';

        if (this.files && this.files[0]) {
            img = URL.createObjectURL(this.files[0]);
            setTimeout(function () {
                document.getElementById('logoViewer').innerHTML = ' \
                <div class="remove-button" onclick="removePhoto(\'logoViewer\')"> \
                    <i class="fas fa-times"></i> \
                </div> \
                <img class="img-fluid img-thumbnail" src="' + img + '" width="120">';
            }, 500);
        }
    });
});

window.addEventListener('load', function () {
    document.getElementById('favicon').addEventListener('change', function () {
        document.getElementById('faviconViewer').innerHTML = '<i class="fas fa-spinner fa-pulse loader"></i>';

        if (this.files && this.files[0]) {
            img = URL.createObjectURL(this.files[0]);
            setTimeout(function () {
                document.getElementById('faviconViewer').innerHTML = ' \
                <div class="remove-button" onclick="removePhoto(\'faviconViewer\')"> \
                    <i class="fas fa-times"></i> \
                </div> \
                <img class="img-fluid img-thumbnail" src="' + img + '" width="120">';
            }, 500);
        }
    });
});

function removePhoto(param) {
	var photo = document.getElementById(param);
	photo.innerHTML = '';
	var input = document.createElement("INPUT");
	input.setAttribute("type", "hidden");
    if(param == 'photoViewer') {
        input.setAttribute("name", "removed_photo");
    } else if(param == 'faviconViewer') {
        input.setAttribute("name", "removed_favicon");
    } else {
        input.setAttribute("name", "removed_logo");
    }
	photo.appendChild(input);
}