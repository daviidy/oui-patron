@extends('layouts.menu-principal')
@section('content')
<div class="page-wrapper">
    <div class="home--hero-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center hero-header-container">
                    <h1 class="hero-header">Dites nous votre besoin</h1>


                    <div class="mobile-search-bar js-mobile-search-bar search-bar">
                        <div class="form-holder">
                            <div class="navbarSearch">
                                <input class="form-control navbar-search-input js-navbar-search-input nav-input autocomplete-topics" type="text" placeholder="Search for the language you want to learn: Python, Javascript,...">
                            </div>
                            <i class="icon ion-ios-search-strong"></i>
                        </div>
                    </div>
                    <div class="desktop-search-bar search-bar">
                        <div class="form-holder">
                            <div class="navbarSearch">
                                <input class="form-control navbar-search-input js-navbar-search-input nav-input js-filter-topics" type="text" placeholder="Search for the language you want to learn: Python, Javascript,...">
                            </div>
                            <i class="icon ion-ios-search-strong"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page--section paddingtop-sm marginbottom-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 no-paddingright-desktop">
                    <div class="page--body">
                        <div class="flex-grid hackr--flex-grid home--flex-grid js-topics-list">
                            <a href="" data-alias="cs, computer science, web development,hello, full stack,website,oops," class=" topic-grid-item js-topic-grid-item">
                                <img class="topic-thumbnail" alt="Intro to Programming Tutorials and Courses" src="https://d30y9cdsu7xlg0.cloudfront.net/png/69686-200.png">
                                <p class="js-topic">Plomberie</p>
                            </a>
                        </div>
                        <div id="no_topics_found" class="col-md-12 text-center hidden marginbottom-sm">
                            <span class="no-results"><em>Sorry, no results found!</em></span>
                            <p class="text-center margintop-md">We are a community-driven website. Please feel free to submit the courses/tutorials that you would want to recommend to the programming community.</p>
                        </div>
                    </div>

                </div>

            </div>


        </div>
        
    </div> <!-- page-wrapper -->
    @endsection
