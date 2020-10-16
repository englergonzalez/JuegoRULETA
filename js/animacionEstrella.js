var n_estrellas = 50;
		var cv, cx, estrellas = [];
		var vel_max = 500;
		function prepararEstrella(index) {
			estrellas[index] = {
				'color' : 'rgb('
					+(Math.random() * 255) + ','
					+(Math.random() * 255) + ','
					+(Math.random() * 255) + ')',
				'vel_x' :
					(Math.random() * vel_max * 2) - vel_max + 1,
				'vel_y' :
					(Math.random() * vel_max * 2) - vel_max + 1,
				'x'     : 250,
				'y'     : 250
			};
		}
		function pintar() {
			// Limpiar el área con un cuadro negro
            cx.fillStyle = 'transparent';
            document.getElementById('juego').style.backgroundColor = "transparent";
			cx.fillRect(0,-50,1600,700);
			cx.fillStyle = '#fff';
			for(var i = 0; i < n_estrellas; i++) {
				var e = estrellas[i];
				cx.fillStyle = e.color;
				if(e.x > 1600 || e.y > 700 || e.x < 0 || e.y < -50) {
					prepararEstrella(i);
				}
				// Hacer el incremento de la posición
				// de las estrellas en pantalla.
				e.x += e.vel_x;
				e.y += e.vel_y;
				// Pintar la estrella
				cx.fillRect(e.x,e.y,2, 2);
			}
			setTimeout(pintar, 25);
		}
		window.onload = function() {
            cv = document.getElementById('juego');
			cx = cv.getContext('2d');
			for(var i = 0; i < n_estrellas; i++) {
				prepararEstrella(i);
			}
			pintar();
		};