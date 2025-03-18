@extends('layouts.default')

@section('content')
    
<section class="section">
   <div class="section-header">
      <h1>Role</h1>
   </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          	<div class="card-body">
            	<h4>Data Role</h4>		
         	</div>
					<div class="container">
						<div class="form-group">
							<div class="input-group mb-3">
								<label for="inputText" class="col-sm-12 col-form-label">Username</label>
								<input type="text" class="form-control" placeholder="" aria-label="">
							</div>      

							<form action="">
								<div class="row mb-4">
									<label style="display: block; margin-bottom: 20px;" for="inputText" class="col-sm-12 col-form-label"><b>Permission</b></label>
									@foreach($getPermission as $value)
										<div class="mb-2 col-md-2">
											{{ $value['name'] }}
										</div>
										<div class=" mb-3 col-md-10">
											<div class="row">
												@foreach ($value['group'] as $group)
													<div class="col-md-2">
														<label><input type="checkbox" name="permission_id[]"> {{ $group['name'] }}</label>
													</div>
												@endforeach
											</div>
											<hr>
										</div>
									@endforeach
								</div>      
								<button type="submit" class="btn btn-primary">Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

