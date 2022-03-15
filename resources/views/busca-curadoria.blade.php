@extends('layout/base')

@section('title', 'Busca e Curadoria')

@section('bucus-ativo', 'active')

<div style="width: 100%; height: 430px; position: absolute; background: #fff8e2; z-index: -1;">
</div>

@section('content')

<div class="container p-4">

    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <a class="btn" style="width: 100%; margin-bottom: 5px; color: white; border-radius: 0; background-color: #f73358;">Ciclo</a>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Cultura
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Educação
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Música
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Entreterimento
                  </label>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="mb-3">
                <a class="btn" style="width: 100%; margin-bottom: 5px; color: white; border-radius: 0; background-color: #4ea79b;">Categoria</a>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Cultura
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Educação
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Música
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Entreterimento
                  </label>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="mb-3">
                <a class="btn btn-info" style="width: 100%; margin-bottom: 5px; color: white; border-radius: 0;">Disciplina</a>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Disciplina
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Educação
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Música
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck">
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Entreterimento
                  </label>
                </div>
            </div>
        </div>
    </div>

    <div class="form__group field">
        <input type="input" class="form__field" placeholder="Pesquise por palavras chave" name="name" id='name' required />
        <label for="name" class="form__label">Buscar</label>
    </div>

    <br>
    <br>
    <br>
    <br>
    <div class="card" style="width: 18rem; border: 0;">
        <img src="https://dummyimage.com/250x150/000/fff" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <div style="margin-bottom: 10px;">
                <span class="badge bg-success">Success</span>
                <span class="badge bg-danger">Danger</span>
                <span class="badge bg-warning text-dark">Warning</span>
                <span class="badge bg-info text-dark">Info</span>
            </div>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/conteudo?id=12331" class="btn" style="color: white;background-color: #f73358;">Ler mais</a>
        </div>
    </div>

</div>

@endsection
