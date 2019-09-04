<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
<script src="<?php echo base_url() ?>assets/bower_components/ckeditor/ckeditor.js"></script>
<script>
    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: -8.2230043,
                lng: 114.3653102
            },
            zoom: 13,
            mapTypeId: 'roadmap'
        });

        // Membuat Kotak pencarian terhubung dengan tampilan map
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);


        var markers = [];
        // Mengaktifkan detail pada suatu tempat ketika pengguna
        // memilih salah satu dari daftar prediksi tempat 
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // menghilangkan marker tempat sebelumnya
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

            // Untuk setiap tempat, dapatkan icon, nama dan tempat.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };



                // Membuat Marker untuk setiap tempat
                markers.push(new google.maps.Marker({

                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location,
                    drag: true

                }));
                var lat = place.geometry.location.lat();
                var lng = place.geometry.location.lng();

                if (place.geometry.viewport) {
                    bounds.union(place.geometry.viewport);
                    document.getElementById("latlong").value = lat + ',' + lng;
                    //document.getElementById('lng').value=lng; 
                } else {
                    bounds.extend(place.geometry.location);

                }
            });
            map.fitBounds(bounds);
        });
        google.maps.event.addListener(marker, 'drag', function() {
            // ketika marker di drag, otomatis nilai latitude dan longitude
            //menyesuaikan dengan posisi marker 
            updateMarkerPosition(marker.getPosition());
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-DSoxPXjj8RRkqy2Do0VKCo0f57K0nwk&libraries=places&callback=initAutocomplete" async defer></script>

</body>

</html>