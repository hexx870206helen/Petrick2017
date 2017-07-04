@extends('layout.base')

@section('title')

Helen

@endsection

@section('product-name')

hahahah

@endsection

@section('content')

<div class="content_wrapper">
    <div class="banner">
        <img src="{{URL::asset('image/banner.jpg')}}" alt="banner" />
    </div>
    <div class="body_content">
        <div class="col-md-10 image-grid">
            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/home">
                        <img src="{{URL::asset('image/banner.jpg')}}" class="img-responsive"
                        alt="soi">
                        <div class="product_icon" style="background-color: #cc3366; width: 157px
                        ">
                            <span>Southern Oscillation Index</span>
                        </div>
                        <div class="overlay">
                            <span>The key atmospheric measure of the El Niño Southern Oscillation,
                            based on Darwin and Tahiti barometric pressures.</span>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/home">
                        <img src="{{URL::asset('image/banner.jpg')}}" class="
                        img-responsive" alt="forage">
                        <div class="product_icon" style="background-color: #339999;
                        width: 90px">
                            <span>FORAGE</span>
                        </div>
                        <div class="overlay">
                            <span>Climate and pasture seasonal outlooks for your property.
                            </span>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/home">
                        <img src="{{URL::asset('image/banner.jpg')}}" class="
                        img-responsive" alt="aussiegrass">
                        <div class="product_icon" style="background-color: #0066cc; width: 120px">
                            <span>AussieGRASS</span>
                        </div>
                        <div class="overlay">
                            <span>Mapping the biophysical processes influencing pasture growth for
                            Australia
                            </span>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/home">
                        <img src="{{URL::asset('image/banner.jpg')}}" class="img-responsive" alt="drought" >
                        <div class="product_icon" style="background-color: brown; width: 81px">
                            <span>Drought</span>
                        </div>
                        <div class="overlay">
                            <span>Drought declaration maps and information about the Queensland
                            Drought Mitigation Centre.</span>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/home" target="_blank">
                        <img src="{{URL::asset('image/banner.jpg')}}" class="img-responsive"
                        alt="silo">
                        <div class="product_icon" style="background-color: #666699; width: 62px">
                            <span>SILO</span>
                        </div>
                        <div class="overlay">
                            <span>Australian meteorological data from 1889 (current to yesterday),
                            in a number of ready-to-use formats, suitable for biophysical
                            modelling agreed.</span>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/home" target="_blank">
                        <img src="{{URL::asset('image/banner.jpg')}}" class="img-responsive"
                        alt="ccs">
                        <div class="product_icon" style="background-color: gray; width: 132px">
                            <span>Climate Change Projections</span>
                        </div>
                        <div class="overlay">
                            <span>Access to future climate projections for Australia for 2030,
                            2050 and 2070.</span>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/home" target="_blank">
                        <img src="{{URL::asset('image/banner.jpg')}}" class="img-responsive"
                        alt="Seasonal climate outlook">
                        <div class="product_icon" style="background-color: gray; width: 140px">
                            <span>Seasonal climate outlook</span>
                        </div>
                        <div class="overlay">
                            <span>Access to DSITI’s Monthly Climate Statement, seasonal climate
                            outlook systems and sea-surface temperature anomaly maps.</span>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="/home" target="_blank">
                        <img src="{{URL::asset('image/banner.jpg')}}" class="img-responsive"
                        alt="SPOTA-1">
                        <div class="product_icon" style="background-color: gray; width: 91px">
                            <span>SPOTA-1</span>
                        </div>
                        <div class="overlay">
                            <span>An experimental seasonal forecast system, which provides
                            long-lead outlooks for summer (November to March) rainfall based on
                            Pacific Ocean sea-surface temperatures.</span>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('last-updated')

Last updated: 14 June 2017

@endsection
