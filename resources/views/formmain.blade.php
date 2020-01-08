<?php

@extends('layout.principal')

<ul	class="nav	navbar-nav	navbar-right">
    <li><a	href="/produtos">Listagem</a></li>
    <li><a	href="/produtos/novo">Novo</a></li>
</ul>

@section('conteudo')
    <h1>Novo produto</h1>
    <form>
        <div class="form-group">
            <label>Nome</label>
            <input	class="form-control">
        </div>
        <div	class="form-group">
            <label>Descriçao</label>
            <input	class="form-control">
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input	class="form-control">
        </div>
        <div	class="form-group">
            <label>Quantidade</label>
            <input	type="number"	class="form-control">
        </div>
        <button	type="submit"	class="btn
				btn-primary	btn-block">Submit</button>
    </form>
@stop
