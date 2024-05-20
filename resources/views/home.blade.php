@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
        <div class="cards">
            <div class="container">
                
            </div>
        </div>
        <div class="sub-nav">
            <div class="container d-flex align-items-center justify-content-center ">
                <ul class="d-flex list-unstyled justify-content-center align-items-center gap-5 ">
                    <li class="d-flex gap-3 align-items-center" v-for="item in items" :key="item.imageUrl">
                        <img :src="'/img/' + item.image" alt="Image description">
                       
                </ul>
            </div>
        </div>
        <div class="links">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                                <MenuComponent title="dc comics" :items="links.dcComics"/>
                                <MenuComponent title="dc" :items="links.dc"/>
                                <MenuComponent title="sites" :items="links.sites"/>
                                <MenuComponent title="shop" :items="links.shop"/>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="/img/dc-logo-bg.png" alt="Big dc logo">
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
