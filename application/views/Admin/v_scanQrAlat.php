
    <link rel="stylesheet" href="<?= base_url('assets/insta/'); ?>style.css">
    <script type="text/javascript" src="<?= base_url('assets/insta/'); ?>adapter.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/insta/'); ?>vue.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/insta/'); ?>instascan.min.js"></script>

    <!-- <a href="https://github.com/schmich/instascan"></a> -->
    <div id="app">
      <div class="sidebar">
        <section class="cameras">
          <h2>Cameras</h2>
          <ul>
            <li v-if="cameras.length === 0" class="empty">No cameras found</li>
            <li v-for="camera in cameras">
              <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
              <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
              </span>
            </li>
          </ul>
        </section>
        <section class="scans">
          <h2>Scans</h2>
          <ul v-if="scans.length === 0">
            <li class="empty">No scans yet</li>
          </ul>
          <transition-group name="scans" tag="ul">
            <li v-for="scan in scans" :key="scan.date" :title="scan.content">{{ scan.content }}</li>
          </transition-group>
        </section>
      </div>
      <div class="preview-container">
        <video id="preview"></video>
      </div>
    </div>
    <script type="text/javascript" src="<?= base_url('assets/insta/'); ?>app.js"></script>


<script type="text/javascript">

        setInterval('nilai()', 500);
  
        function nilai(){
          let nilai = document.querySelector(".scans ul li").innerHTML;
          if (nilai=="No scans yet") {
            console.log(nilai);
          }else {
            window.location = "http://localhost/sman36jakarta/admin/cek_data_alat/"+nilai;
          }
        };

</script>