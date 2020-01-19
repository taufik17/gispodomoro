<section class="content">
	<div class="container-fluid">
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-7 connectedSortable" style="margin-bottom: 20px;">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="card-info">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-map-marker-alt mr-1"></i>
							Piliha Lokasi Tempat Ibadah
						</h3>
					</div><!-- /.card-header -->
					<div>
						<section class="col-lg-12 lebar">
							<div id="map"></div>
							<div id="basemaps-wrapper" class="leaflet-bar">
							  <select id="basemaps">
									<option value="Imagery">Imagery</option>
							    <option value="Topographic">Topographic</option>
							    <option value="Streets">Streets</option>
							    <option value="NationalGeographic">National Geographic</option>
							    <option value="Oceans">Oceans</option>
							    <option value="Gray">Gray</option>
							    <option value="DarkGray">Dark Gray</option>
							    <option value="ImageryClarity">Imagery (Clarity)</option>
							    <option value="ImageryFirefly">Imagery (Firefly)</option>
							    <option value="ShadedRelief">Shaded Relief</option>
							    <option value="Physical">Physical</option>
							  </select>
							</div>
						</section>
					</div><!-- /.card-body -->
				</div>
				<!-- /.card -->
			</section>
			<!-- /.Left col -->
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-5 connectedSortable">
				<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
									<i class="fas fa-pencil-alt mr-1"></i>
									Input Data</h3>
              </div>
              <!-- /.card-header -->
							<form class="form-horizontal" method="post" action="<?= base_url(); ?>manajemen_tempat_ibadah/simpan" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" placeholder="Nama Tempat Ibadah" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ketua</label>
                    <div class="col-sm-10">
                      <input type="text" name="ketua" class="form-control" placeholder="Ketua / Pengurus" required>
                    </div>
                  </div>

									<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-10">
                      <input type="text" name="latitude" id="lat" class="form-control" placeholder="Latitude" value="<?php echo set_value('lat'); ?>" required readonly>
                    </div>
                  </div>

									<div class="form-group row">
                    <label class="col-sm-2 col-form-label" style="font-size: 13px;">Longtitude</label>
                    <div class="col-sm-10">
                      <input type="text" name="longtitude" id="long" class="form-control" placeholder="Longtitude" value="<?php echo set_value('long'); ?>" required readonly>
                    </div>
                  </div>

									<div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
											<input type="file" class="dropify" name="foto_ibadah" data-height="80" required>
											<p class="help-block">File Max 10 Mb</p>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">
										<i class="fas fa-save mr-1"></i>Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
			</section>
			<!-- right col -->
		</div>
		<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>


</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
	<strong>Copyright &copy; <?php echo date("Y");?> <a href="https://taufik17.github.io/" target="_blank">TaufikSan</a>.</strong> All rights reserved.

	<div class="float-right d-none d-sm-inline-block">
		<div class="user-panel d-flex">
			<div class="image">
				<img src="<?= base_url(); ?>assets/dist/img/Logo.png" alt="User Image">
			</div>
			<div class="info">
				<a href="https://kkn.itera.ac.id/" target="_blank" class="d-block"><b>KKN Instutut Teknologi Sumatera</b> 2019</a>
			</div>
		</div>
	</div>

</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/dropify/dropify.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.dropify').dropify({
		messages: {
							default: 'Drag atau drop untuk memilih file',
							replace: 'Ganti',
							remove:  'Hapus',
							error:   'error'
					}
	});
});

</script>

<!-- maps -->
<script>
var map = L.map('map').setView([-5.344002, 104.996702], 15);
var layer = L.esri.basemapLayer('Imagery').addTo(map);
var layerLabels;
var base_url="<?= base_url() ?>";

function setBasemap (basemap) {
	if (layer) {
		map.removeLayer(layer);
	}

	layer = L.esri.basemapLayer(basemap);

	map.addLayer(layer);

	if (layerLabels) {
		map.removeLayer(layerLabels);
	}

	if (
		basemap === 'ShadedRelief' ||
		basemap === 'Oceans' ||
		basemap === 'Gray' ||
		basemap === 'DarkGray' ||
		basemap === 'Terrain'
	) {
		layerLabels = L.esri.basemapLayer(basemap + 'Labels');
		map.addLayer(layerLabels);
	} else if (basemap.includes('Imagery')) {
		layerLabels = L.esri.basemapLayer('ImageryLabels');
		map.addLayer(layerLabels);
	}
}

document
	.querySelector('#basemaps')
	.addEventListener('change', function (e) {
		var basemap = e.target.value;
		setBasemap(basemap);
	});

	var arcgisOnline = L.esri.Geocoding.arcgisOnlineProvider();

	L.esri.Geocoding.geosearch({
		providers: [
			arcgisOnline,
			L.esri.Geocoding.featureLayerProvider({
				url: 'https://services.arcgis.com/uCXeTVveQzP4IIcx/arcgis/rest/services/gisday/FeatureServer/0/',
				searchFields: ['Name', 'Organization'],
				label: 'GIS Day Events',
				bufferRadius: 5000,
				formatSuggestion: function (feature) {
					return feature.properties.Name + ' - ' + feature.properties.Organization;
				}
			})
		]
	}).addTo(map);

	var myFeatureGroup = L.featureGroup().addTo(map).on("click", groupClick);
	var bangunanMarker;

	$.getJSON(base_url+"gis_tempat_ibadah/ibadah_json", function(data){
		$.each(data, function(i, field){

			var v_lat=parseFloat(data[i].latitude);
			var v_long=parseFloat(data[i].longtitude);

			var icon_sekolah_tpa = L.icon({
				iconUrl: base_url+'assets/marker/masjid.png',
				iconSize: [30, 30]
			});

			bangunanMarker = L.marker([v_lat, v_long],{icon:icon_sekolah_tpa})
				.addTo(myFeatureGroup)
				.bindPopup(data[i].nama_bangunan);
				bangunanMarker.id = data[i].id_ibadah;
		});
	});

	function groupClick(event){
		console.log("clicked on marker" + event.layer.id);
	}

	$.getJSON(base_url+"assets/map.geojson", function(data){
		geoLayer = L.geoJson(data, {
			style: function(feature) {
				return {
					fillOpacity: 0.0,
					weight: 2,
					opacity: 1,
					color: 'red',
				};
			},
			onEachFeature: function(feature, layer){
				var latt = parseFloat(feature.properties.latitude);
			}
		}).addTo(map);
	});

	var theMarker = {};

	map.on('click',
	function(e){
		var coord = e.latlng.toString().split(',');
		var lat = coord[0].split('(');
		var lng = coord[1].split(')');
		if (theMarker != undefined) {
					map.removeLayer(theMarker);
		};
		theMarker = L.marker([lat[1],lng[0]]).addTo(map).bindPopup("Latitude: " + lat[1] +"<br>" + "longitude:" + lng[0]).openPopup();
		document.getElementById("lat").value = lat[1];
		document.getElementById("long").value = lng[0];
	});

</script>

<!-- end maps -->

</body>
</html>
