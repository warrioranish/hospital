@extends('backend.layouts.master')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="green">
                            <i class="material-icons">settings</i>
                        </div>
                        <h4 class="card-title"> Settings </h4>
                        <div class="card-content">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <div id="map" style="min-height:350px;"></div>
                                </div>
                                <div class="col-md-12">
                                    <form method="POST" action="{{route('storetestimonials')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="hidden" name="latitude" id="latitude" value="">
                                        <input type="hidden" name="longitude" id="longitude" value="">
                                        <div class="form-group label-floating">
                                            <label class="control-label"> Site Name <span class="asterisk">*</span></label>
                                            <input type="text" name="name" class="form-control" autocomplete="off" required>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Feedback Emai<span class="asterisk">*</span></label>
                                            <input type="text" name="position" class="form-control" autocomplete="off" required>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">testimonial <span class="asterisk">*</span></label>
                                            <textarea name="testimonial" class="form-control" id="" cols="30" rows="5" required></textarea>
                                            {{--<input type="text" name="testimonial" class="form-control" autocomplete="off" required>--}}
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="status" value="1" checked="true"> active
                                            </label>
                                            <label>
                                                <input type="radio" name="status" value="0"> inactive
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function initMap() {
            var lat_value = document.getElementById('latitude').value;
            var long_value = document.getElementById('longitude').value;

            var uluru = new google.maps.LatLng(lat_value, long_value);

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                draggable: true,
                title: "Drag me!"
            });

            google.maps.event.addListener(marker, 'drag', function(event){
                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longitude").value = event.latLng.lng();
            });

            google.maps.event.addListener('marker', 'dragend', function (event){
                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longitude").value = event.latLng.lng();
            });
        }
    </script>
@endsection
