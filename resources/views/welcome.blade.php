@extends('layouts.user_type.auth')

@section('content')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h2 class="text-center bold">SISTEMA DE GESTIÓN DE DESERCIÓN UNIVERSITARIA</h2>
                        </div>
                        <div class="card-body pb-0">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="welcome d-flex">
                                <img src="/assets/img/desercion.jpg" alt="estudiantes">
                                <aside>
                                    <h3 class="text-center bold">La Deserción en la Universidad Estatal de Bolívar</h3>
                                    <p class="text-justify">
                                        La deserción universitaria es un preocupante fenómeno multifactorial porque afecta a diferentes niveles y
                                        diferentes actores (estudiantes, instituciones y países). La literatura muestra que muchas veces enfatiza
                                        que los estudiantes son casi enteramente responsables de sí mismos, y también nos invita a cuestionar la
                                        persistencia de este problema, incluso después de décadas de investigación e implementación de múltiples
                                        estrategias para resolver este problema.
                                    </p>
                                </aside>
                            </div>
                            <p>
                                Ésta y otras cuestiones apuntan a la necesidad de cambiar de
                                perspectiva para no pasar por alto el papel de las instituciones en lo que sucedió con la deserción
                                universitaria y la urgencia de revisar los conceptos estandarizados de éxito y fracaso dentro de los
                                estudiantes a nivel universitario. Frente a lo que se considera una certeza, examinar estas ideas y
                                cuestionar a las instituciones puede ser una forma de encontrar alternativas.
                            </p>
                        </div>
                        <div class="card-body pb-0">
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h3 class="text-center bold">Factores de la Deserción Universitaria</h3>
                        </div>
                        <div class="card-body pb-0 text-justify" style="overflow-y: auto;height: 200px;">
                            <div class="fac-red">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                    Los factores son considerados como las causas que originan el problema de la deserción en la educación superior.
                                </span>
                            </div>
                            <div class="fac-blue">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                    Características del estudiante y su entorno que pueden influir en la decisión de abandonar las aulas universitarias.
                                </span>
                            </div>
                            <div class="fac-red">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                     Los factores de deserción son considerados como causas diversas y complejas o razones de la deserción.
                                </span>
                            </div>
                            <div class="fac-blue">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                    Se refieren a aquellos elementos, variables o características internas y externas del estudiante y su entorno académico.
                                </span>
                            </div>
                            <div class="fac-red">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                    Deserción definitiva: cuando un estudiante no retoma su formación académica.
                                </span>
                            </div>
                            <div class="fac-blue">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                    Deserción por factores: depende de la causal que ocasiona la separación del estudiante del sistema de educación superior.
                                </span>
                            </div>
                            <div class="fac-red">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                    Deserción por cambio de facultad.
                                </span>
                            </div>
                            <div class="fac-blue">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                    Deserción por cambio de programa académico.
                                </span>
                            </div>
                            <div class="fac-red">
                                <div class="number">
                                    <i style="font-size: 1rem; color: black !important; " class="fas fa-lg fa-book-open ps-2 pe-2 text-center text-dark {{ (Request::is('contact') ? 'text-white' : 'text-dark') }} " aria-hidden="true"></i>
                                </div>
                                <span class="text">
                                    Cuando un alumno no se matricula por más de dos periodos académicos consecutivos, el alumno puede ser considerado como deserto.
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection
