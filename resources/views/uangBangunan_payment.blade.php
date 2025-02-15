@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Entri Pembayaran') }}</div>
				<div class="card-body">
					<form method="post" action="/uangBangunan/bayar/">
	                    {{ csrf_field() }}
	                    <div class="form-group">
	                        <label>ID Siswa</label>
	                        <input type="text" class="form-control" name="id_siswa" placeholder="Masukkan ID Siswa...">
	                        
	                        @if($errors->has('id_siswa'))
	                        	<div class="text-danger">{{ $errors->first('id_siswa') }}</div>
	                        @endif
	                    </div>
	                    <div class="form-group">
	                    	<label>Nominal</label>
	                    	<input type="text" class="form-control" name="nominal" placeholder="Masukkan nominal bayar...">

	                    	@if($errors->has('nominal'))
	                    		<div class="text-danger">{{ $errors->first('nominal') }}</div>
	                    	@endif
	                    </div>
	                   	<div class="form-group">
	                   		<a href="/home" class="btn btn-success">Kembali</a>
	                   		<input type="submit" class="btn btn-success" value="Bayar"></input>
	                   	</div>
	                </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection