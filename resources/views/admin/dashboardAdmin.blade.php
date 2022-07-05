@extends('layouts.layout')
@section('tittle','dashboard')
@section('content')
<!-- MAIN CONTENT-->
<!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
        <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">11</h2>
                                <span class="desc">Data Training</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-book"></i>
                                </div>
                                <a href="{{ url('/admin/training') }}" class="text-muted small-light">Lihat detail >></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">11</h2>
                                <span class="desc">Data Testing</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <a href="{{ url('/admin/testing') }}" class="text-muted small-dark">Lihat detail >></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">11</h2>
                                <span class="desc">Data Tentang</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                                <a href="{{ url('/admin/about') }}" class="text-muted small-dark">Lihat detail >></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">11</h2>
                                <span class="desc">Data Berita/Artikel</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-archive"></i>
                                </div>
                                 <a href="{{ url('/admin/berita') }}" class="text-muted small-dark">Lihat detail >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
            
@stop