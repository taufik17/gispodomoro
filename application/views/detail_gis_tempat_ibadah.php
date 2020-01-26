<section class="content">
	<div class="container-fluid">
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-6 connectedSortable" style="margin-bottom: 20px;">
				<!-- Custom tabs (Charts with tabs)-->
				<div class="card-info">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fas fa-map-marker-alt mr-1"></i>
							Letak Lokasi
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
			<section class="col-lg-6 connectedSortable">
				<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
									<i class="fas fa-image">&nbsp</i>
									Foto</h3>
              </div>
              <!-- /.card-header -->

							<div class="card-body">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										<?php
										$no = 1;
										foreach ($foto->result() as $i ) {
										?>
										<li data-target="#carouselExampleIndicators" data-slide-to="<?= $no++;  ?>"></li>
										<?php }?>
									</ol>

									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" src="<?= base_url(); ?>assets/foto_ibadah/<?= $foto1 ?>" alt="First slide">
										</div>

										<?php
										foreach ($foto->result() as $i ) {
										?>
										<div class="carousel-item">
											<img class="d-block w-100" src="<?= base_url(); ?>assets/foto_ibadah/<?= $i->foto ?>" alt="First slide">
										</div>
										<?php } ?>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
                <!-- /.card-body -->
            </div>
			</section>

			<?php
			foreach ($ibadah->result() as $i ) {
			?>
			<section class="col-lg-12 connectedSortable">
				<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">
									<i class="fas fa-book">&nbsp</i>
									Data <?= $nama_bangunan; ?></h3>
              </div>
              <!-- /.card-header -->

							<div class="card-body">
								<table class="table table-striped table-bordered">
								  <tbody><tr>
								    <th width="400px">A. Gambaran Umum</th>
								    <th></th>
								  </tr>
								  <tr>
								    <td>Nama</td>
								    <td><?= $i->nama_bangunan; ?></td>
								  </tr>
								  <tr>
								    <td>Ketua / Penasihat</td>
								    <td><?= $i->ketua; ?></td>
								  </tr>
									<tr>
								    <td>Sekretaris</td>
								    <td><?= $i->sekretaris; ?></td>
								  </tr>

									<tr>
								    <td>Bendahara</td>
								    <td><?= $i->bendahara; ?></td>
								  </tr>
									<tr>
								    <td>Takmir</td>
								    <td><?= $i->takmir; ?></td>
								  </tr>
									<tr>
								    <td>Humas</td>
								    <td><?= $i->humas; ?></td>
								  </tr>
									<tr>
								    <td>Seksi PHBI</td>
								    <td><?= $i->seksi_phbi; ?></td>
								  </tr>
									<tr>
								    <td>Seksi Pendidikan / Pustaka</td>
								    <td><?= $i->seksi_pendidikan; ?></td>
								  </tr>
									<tr>
								    <td>Seksi Sarana Prasarana</td>
								    <td><?= $i->seksi_sarpras; ?></td>
								  </tr>
									<tr>
								    <td>Seksi Pembangunan</td>
								    <td><?= $i->seksi_pembangunan; ?></td>
								  </tr>
								  <tr>
								    <th>B. Tanah & Bangunan</th>
								    <td></td>
								  </tr>
								  <tr>
								    <td>Alamat</td>
								    <td><?= $i->alamat; ?></td>
								  </tr>
								  <tr>
								    <td>Luas Tanah</td>
								    <td><?= $i->luas_tanah; ?>&nbspm<sup>2</sup></td>
								  </tr>
									<tr>
								    <td>Status Tanah</td>
								    <td><?= $i->status_tanah; ?></td>
								  </tr>
									<tr>
								    <td>Luas Bangunan</td>
								    <td><?= $i->luas_bangunan; ?>&nbspm<sup>2</sup></td>
								  </tr>
									<tr>
								    <td>Tahun Berdiri</td>
								    <td>Tahun&nbsp<?= $i->tahun_berdiri; ?></td>
								  </tr>
								</tbody>
							</table>
							</div>
                <!-- /.card-body -->
            </div>
			</section>
		<?php } ?>
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
var lat =  <?= $latitdue ?>;
var long =  <?= $longtitude ?>;
var map = L.map('map').setView([lat, long], 15);
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

			var icon_ibadah = L.icon({
				iconUrl: base_url+'assets/marker/masjid.png',
				iconSize: [30, 30]
			});

			if (data[i].id_ibadah == <?= $id_ibadah; ?>) {
				bangunanMarker = L.marker([v_lat, v_long],{icon:icon_ibadah})
				.addTo(myFeatureGroup)
				.bindPopup(data[i].nama_bangunan)
				bangunanMarker.id = data[i].id_ibadah;
			}
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
