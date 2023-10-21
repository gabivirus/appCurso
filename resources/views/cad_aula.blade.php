@extends('padrao')
@section('content')

<section>
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title d-flex align-items-center flex-wrap">
            <h2 class="mr-40">Cadastrar Categoria</h2>
          </div>
        </div>
        <!-- Invoice Wrapper Start -->
        <div class="invoice-wrapper align-items-center m-5">
          <div class="row align-items-center">
            <div class="col-10 ">
              <div class="invoice-card card-style mb-30">
                <div class="card-style mb-30 ">
                  <h6 class="mb-25 fs-4" >Insira a nova aula</h6>
                  <form action="{{route('cadastro-categoria')}}" method="post">
                    @csrf
                    <div class="input-style-1 fs-4 ">
                      <label class="fs-4">Titulo</label>
                      <input type="text" placeholder="Titulo da aula" />

                      <label class="fs-4">Curso</label>
                      <input type="text" placeholder="ID do curso" />
                      
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                  </form>
                  </div>
                </div>

              </div>
              <!-- Invoice Wrapper End -->
            </div>
            <!-- end container -->
          </div>
          <!-- end container -->
        </div>
        <!-- end container -->
      </div>
      <!-- end container -->
    </div>
    <!-- end container -->
  </div>
  <!-- end container -->
</section>
@endsection