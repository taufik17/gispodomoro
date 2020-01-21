<section class="content">
	<div class="container-fluid">
		<div class="row">
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
		</div>
	</div>
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

	$.getJSON(base_url+"gis_aset_pekon/aset_json", function(data){
		$.each(data, function(i, field){

			var v_lat=parseFloat(data[i].latitude);
			var v_long=parseFloat(data[i].longtitude);

			var icon_aset = L.icon({
				iconUrl: base_url+'assets/marker/aset.png',
				iconSize: [30, 30]
			});

			bangunanMarker = L.marker([v_lat, v_long],{icon:icon_aset})
				.addTo(myFeatureGroup)
				.bindPopup("<h6 style='text-align: center'>" + data[i].nama_aset + "</h6>"
				+ "<a href='<?= base_url() ?>gis_aset_pekon/detail/"+data[i].id_aset+"'> <img src='<?= base_url() ?>assets/foto_aset/"+data[i].foto+"' height='180px' width='230px'/></a>"
				+ "<div style='width:100%; text-align:center; margin-top:10px;'><a href='<?= base_url() ?>gis_aset_pekon/detail/"+data[i].id_aset+"'> DETAIL </a></div>")
				bangunanMarker.id = data[i].id_aset;
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

</script>

<!-- end maps -->

</body>
</html>
