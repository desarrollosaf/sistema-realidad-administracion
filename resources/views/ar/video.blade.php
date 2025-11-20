<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://aframe.io/releases/1.5.0/aframe.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-aframe.prod.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    #overlay {
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      flex-direction: row;
      align-items: center;
      gap: 20px;
      z-index: 9999;
      pointer-events: none;
    }

    #overlay button,
    #overlay audio {
      pointer-events: auto;
    }

    .button {
      padding: 10px 20px;
      background-color: #94134A;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100px;
    }

    .button:hover {
      background-color: #6e0e37;
    }

    /* MODAL */
    #customModal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.8);
      z-index: 99999;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-top: 60px; 
      box-sizing: border-box;
    }

    .modal-container {
      background: #fff;
      padding: 16px;
      border-radius: 10px;
      color: black;
      text-align: center;
      width: 95vw;            /* 95% del ancho de pantalla */
      max-width: 500px;       /* límite en pantallas grandes */
      box-sizing: border-box;
    }

    .modal-video {
  width: 70%; /* Reduce el tamaño relativo */
  max-width: 300px; /* Máximo tamaño absoluto */
  height: auto;
  border-radius: 10px;
  margin-top: 10px;
}


    /* En lugar de display: none, usa la clase .hidden */
#customModal.hidden {
  display: none;
}

  </style>
</head>

<body>

  <!-- CONTROLES SUPERIORES -->
  <div id="overlay">
    <button id="menuBtn" class="button"><i class="fa-solid fa-arrow-left"></i></button>
    <!--<audio id="audioControl" controls></audio>-->
  </div>

  <!-- ESCENA A-FRAME -->
  <a-scene mindar-image="imageTargetSrc: {{ asset('aframe/examples/assetsSAF/bordados.mind') }}; filterMinCF:0.0001; filterBeta:0.0001;"
           color-space="sRGB"
           renderer="colorManagement: true, physicallyCorrectLights"
           vr-mode-ui="enabled: false"
           device-orientation-permission-ui="enabled: false">

    <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
    <a-entity light="type: directional; intensity: 1" position="1 1 1"></a-entity>
    <a-entity light="type: ambient; intensity: 0.5"></a-entity>

    @for ($i = 0; $i < 32; $i++)
        <a-entity mindar-image-target="targetIndex: {{ $i }}"></a-entity>
    @endfor
  </a-scene>

  <!-- MODAL -->
  <div id="customModal" class="hidden">
    <div class="modal-container">
      <video 
        src="{{ asset('aframe/examples/assets/videoDGCS.mp4') }}" 
        class="modal-video"
        autoplay 
        muted 
        playsinline 
        loop 
        controls>
      </video>
      <br>
      <button onclick="closeModal()" style="padding:10px 20px; background:#94134A; color:white; border:none; border-radius:5px;">Cerrar</button>
    </div>
  </div>

  <!-- AUDIOS -->
  <audio id="idioma1" src="{{ asset('images/Español_01.mp3') }}"></audio>
  <audio id="idioma2" src="{{ asset('images/Ingles_01.mp3') }}"></audio>
  <audio id="idioma3" src="{{ asset('images/Mazahua_01.mp3') }}"></audio>
  <audio id="idioma4" src="{{ asset('images/Otomi_01.mp3') }}"></audio>
  <audio id="idioma5" src="{{ asset('images/Nahuatl_01.mp3') }}"></audio>

  <!-- SCRIPT -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    const targetVideos = {
      0: "{{ asset('aframe/examples/assetsSAF/video1.mp4') }}",
      1: "{{ asset('aframe/examples/assetsSAF/video2.mp4') }}",
      2: "{{ asset('aframe/examples/assetsSAF/video3.mp4') }}",
      3: "{{ asset('aframe/examples/assetsSAF/video4.mp4') }}",
      4: "{{ asset('aframe/examples/assetsSAF/video5.mp4') }}",
      5: "{{ asset('aframe/examples/assetsSAF/video6.mp4') }}",
      6: "{{ asset('aframe/examples/assetsSAF/video7.mp4') }}",
      7: "{{ asset('aframe/examples/assetsSAF/video8.mp4') }}",
      8: "{{ asset('aframe/examples/assetsSAF/video9.mp4') }}",
      9: "{{ asset('aframe/examples/assetsSAF/video10.mp4') }}",
      10: "{{ asset('aframe/examples/assetsSAF/video11.mp4') }}",
      11: "{{ asset('aframe/examples/assetsSAF/video12.mp4') }}",
      12: "{{ asset('aframe/examples/assetsSAF/video13.mp4') }}",
      13: "{{ asset('aframe/examples/assetsSAF/video14.mp4') }}",
      14: "{{ asset('aframe/examples/assetsSAF/video15.mp4') }}",
      15: "{{ asset('aframe/examples/assetsSAF/video16.mp4') }}",
      16: "{{ asset('aframe/examples/assetsSAF/video17.mp4') }}",
      17: "{{ asset('aframe/examples/assetsSAF/video18.mp4') }}",
      18: "{{ asset('aframe/examples/assetsSAF/video19.mp4') }}",
      19: "{{ asset('aframe/examples/assetsSAF/video20.mp4') }}",
      20: "{{ asset('aframe/examples/assetsSAF/video21.mp4') }}",
      21: "{{ asset('aframe/examples/assetsSAF/video22.mp4') }}",
      22: "{{ asset('aframe/examples/assetsSAF/video23.mp4') }}",
      23: "{{ asset('aframe/examples/assetsSAF/video24.mp4') }}",
      24: "{{ asset('aframe/examples/assetsSAF/video25.mp4') }}",
      25: "{{ asset('aframe/examples/assetsSAF/video26.mp4') }}",
      26: "{{ asset('aframe/examples/assetsSAF/video27.mp4') }}",
      27: "{{ asset('aframe/examples/assetsSAF/video28.mp4') }}",
      28: "{{ asset('aframe/examples/assetsSAF/video29.mp4') }}",
      29: "{{ asset('aframe/examples/assetsSAF/video30.mp4') }}",
      30: "{{ asset('aframe/examples/assetsSAF/video31.mp4') }}",
      31: "{{ asset('aframe/examples/assetsSAF/video32.mp4') }}"
    };


    $(document).ready(function () {
      const idioma = {!! json_encode($idioma) !!};
      //const audioControl = document.getElementById("audioControl");
      const alarma = document.getElementById("idioma" + idioma);
      const modal = document.getElementById("customModal");
      modal.classList.add('hidden');

      //audioControl.src = alarma.src;
      //audioControl.load();

      for (let i = 0; i <= 31; i++) {
        const target = document.querySelector(`[mindar-image-target='targetIndex: ${i}']`);

        if (target) {
          console.log("holaaa target " + i);
          target.addEventListener("targetFound", () => handleTargetFound(i));
        }
      }

      function handleTargetFound(targetIndex) {
        const videoSrc = targetVideos[targetIndex];
        if (!videoSrc) return;

        const modal = document.getElementById("customModal");
        const video = modal.querySelector("video");

        // Cambiar el src dinámicamente
        video.src = videoSrc;
        video.muted = false;
        video.load(); // Carga el nuevo video
        video.play(); // Reproduce

        // Mostrar el modal
        modal.classList.remove("hidden");
        modal.style.display = "flex";
      }

      /*audioControl.addEventListener("ended", function () {
        audioControl.play();
      });*/

      $('#menuBtn').click(() => {
        window.location.href = "/bordados";
      });

      window.closeModal = function () {
        modal.style.display = "none";
        modal.classList.add('hidden');
        const video = modal.querySelector("video");

          video.pause();
          video.src = "";
        //audioControl.pause();
      }
    });
  </script>
</body>
</html>
