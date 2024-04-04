@extends('back789658.admin')

@section('title', 'Accueil')

@section('stylesheets')

@endsection

@section('content')

<div class="my-5">
    <div class="row justify-content-center mb-4">
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.article.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Articles</h5>
                        <svg height="50" width="50" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M499.615,84.287c-6.845,0-12.385,5.539-12.385,12.385v320.151c-0.024,12.65-10.268,22.87-22.895,22.895H47.666 c-12.652-0.025-22.872-10.245-22.895-22.895V78.433L62.3,93.975c3.012,1.246,6.459,1.246,9.483,0l49.927-20.671l49.916,20.671 c3.012,1.246,6.47,1.246,9.482,0l49.904-20.671l49.904,20.671c3.012,1.246,6.459,1.246,9.471,0l49.963-20.671l50.012,20.671 c3.012,1.246,6.446,1.246,9.458,0l37.628-15.554v318.06c0,6.845,5.538,12.385,12.385,12.385c6.845,0,12.385-5.54,12.385-12.385 V59.903c0-4.136-2.056-7.994-5.504-10.293c-3.434-2.31-7.789-2.744-11.611-1.148l-50.011,20.657l-50.012-20.657 c-3.012-1.258-6.447-1.258-9.459,0l-49.964,20.657l-49.904-20.657c-3.011-1.258-6.47-1.258-9.482,0l-49.904,20.657l-49.916-20.657 c-3.011-1.258-6.459-1.258-9.482,0L67.042,69.119L17.126,48.462C13.292,46.876,8.95,47.3,5.503,49.599 C2.056,51.909,0,55.767,0,59.903v356.92c0,26.342,21.347,47.653,47.666,47.666h416.669c26.318-0.012,47.653-21.324,47.666-47.666 V96.672C512,89.826,506.46,84.287,499.615,84.287z"></path> <rect x="81.192" y="164.548" class="st0" width="134.011" height="128.726"></rect> <rect x="264.781" y="165.963" class="st0" width="114.526" height="19.811"></rect> <rect x="264.781" y="223.463" class="st0" width="114.526" height="19.812"></rect> <rect x="264.781" y="280.985" class="st0" width="114.526" height="19.812"></rect> <rect x="81.192" y="338.485" class="st0" width="298.115" height="19.811"></rect> </g> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\ArticleController')->countArticles() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.application.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Candidatures</h5>
                        <svg height="50" width="50" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>category-list</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M24,10h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,10Z"></path> <path d="M24,24h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,24Z"></path> <path d="M24,38h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,38Z"></path> <path d="M12,7.9,14.4,12H9.5L12,7.9M12,2a2.1,2.1,0,0,0-1.7,1L4.2,13a2.3,2.3,0,0,0,0,2,1.9,1.9,0,0,0,1.7,1H18a2.1,2.1,0,0,0,1.7-1,1.8,1.8,0,0,0,0-2l-6-10A1.9,1.9,0,0,0,12,2Z"></path> <path d="M12,30a6,6,0,1,1,6-6A6,6,0,0,1,12,30Zm0-8a2,2,0,1,0,2,2A2,2,0,0,0,12,22Z"></path> <path d="M16,44H8a2,2,0,0,1-2-2V34a2,2,0,0,1,2-2h8a2,2,0,0,1,2,2v8A2,2,0,0,1,16,44Zm-6-4h4V36H10Z"></path> </g> </g> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\ApplicationController')->countApplications() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.category.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Catégories</h5>
                        <svg height="50" width="50" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>category-list</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M24,10h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,10Z"></path> <path d="M24,24h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,24Z"></path> <path d="M24,38h0a2,2,0,0,1,2-2H42a2,2,0,0,1,2,2h0a2,2,0,0,1-2,2H26A2,2,0,0,1,24,38Z"></path> <path d="M12,7.9,14.4,12H9.5L12,7.9M12,2a2.1,2.1,0,0,0-1.7,1L4.2,13a2.3,2.3,0,0,0,0,2,1.9,1.9,0,0,0,1.7,1H18a2.1,2.1,0,0,0,1.7-1,1.8,1.8,0,0,0,0-2l-6-10A1.9,1.9,0,0,0,12,2Z"></path> <path d="M12,30a6,6,0,1,1,6-6A6,6,0,0,1,12,30Zm0-8a2,2,0,1,0,2,2A2,2,0,0,0,12,22Z"></path> <path d="M16,44H8a2,2,0,0,1-2-2V34a2,2,0,0,1,2-2h8a2,2,0,0,1,2,2v8A2,2,0,0,1,16,44Zm-6-4h4V36H10Z"></path> </g> </g> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\CategoryController')->countCategories() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.collaborator.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none" style="font-size: 0.99rem;">Collaborateurs</h5>
                        <svg height="50" width="50" fill="#000000" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile1</title> <path d="M23 11.031c0-0.553-0.448-1-1-1h-3c0 0 0.033-1.204 0.033-2.954 0-1.625-1.346-3.108-3.033-3.108s-2.988 1.411-2.988 3.099c0 1.625-0.012 2.964-0.012 2.964h-3c-0.553 0-1 0.447-1 1 0 0.552 0 1.938 0 1.938h14c0-0.001 0-1.387 0-1.939zM16 8.969c-0.553 0-1-0.448-1-1 0-0.553 0.447-1 1-1 0.552 0 1 0.447 1 1s-0.448 1-1 1zM28 11.031l-4-0.062 0.021 3.104h-16.021v-2.979l-4-0.062c-1.104 0-2 0.896-2 2v14c0 1.104 0.896 2 2 2h24c1.104 0 2-0.896 2-2v-14c0-1.105-0.896-2.001-2-2.001zM10 16.844c1.208 0 2.188 1.287 2.188 2.875s-0.98 2.875-2.188 2.875-2.188-1.287-2.188-2.875 0.98-2.875 2.188-2.875zM5.667 25.979c0 0 0.237-1.902 0.776-2.261s2.090-0.598 2.090-0.598 1.006 1.075 1.434 1.075c0.427 0 1.433-1.075 1.433-1.075s1.552 0.238 2.091 0.598c0.633 0.422 0.791 2.261 0.791 2.261h-8.615zM26 25.031h-9v-1h9v1zM26 23.031h-9v-1h9v1zM26 21.031h-9v-1h9v1zM26 19.031h-9v-1h9v1z"></path> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\CollaboratorController')->countCollaborators() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.contact.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Contacts</h5>
                        <svg height="50" width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 9V12M12 15H12.01M21.0039 12C21.0039 16.9706 16.9745 21 12.0039 21C9.9675 21 3.00463 21 3.00463 21C3.00463 21 4.56382 17.2561 3.93982 16.0008C3.34076 14.7956 3.00391 13.4372 3.00391 12C3.00391 7.02944 7.03334 3 12.0039 3C16.9745 3 21.0039 7.02944 21.0039 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\ContactController')->countContacts() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.lang.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Langues</h5>
                        <svg height="50" width="50" viewBox="0 0 600 600" version="1.1" id="svg9724" sodipodi:docname="lang.svg" inkscape:version="1.2.2 (1:1.2.2+202212051550+b0a8486541)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs9728"> <inkscape:perspective sodipodi:type="inkscape:persp3d" inkscape:vp_x="120 : 410 : 1" inkscape:vp_y="0 : 1000 : 0" inkscape:vp_z="660 : 240 : 1" inkscape:persp3d-origin="445.59009 : 254.71928 : 1" id="perspective353"></inkscape:perspective> </defs> <sodipodi:namedview id="namedview9726" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="true" inkscape:zoom="0.84118632" inkscape:cx="109.96375" inkscape:cy="287.09454" inkscape:window-width="1920" inkscape:window-height="1009" inkscape:window-x="0" inkscape:window-y="1080" inkscape:window-maximized="1" inkscape:current-layer="g1082" showguides="true"> <inkscape:grid type="xygrid" id="grid9972" originx="0" originy="0"></inkscape:grid> <sodipodi:guide position="-260,300" orientation="0,-1" id="guide383" inkscape:locked="false"></sodipodi:guide> <sodipodi:guide position="300,520" orientation="1,0" id="guide385" inkscape:locked="false"></sodipodi:guide> <sodipodi:guide position="540,400" orientation="0,-1" id="guide939" inkscape:locked="false"></sodipodi:guide> <sodipodi:guide position="430,200" orientation="0,-1" id="guide941" inkscape:locked="false"></sodipodi:guide> <sodipodi:guide position="290,450" orientation="0,-1" id="guide1084" inkscape:locked="false"></sodipodi:guide> </sodipodi:namedview> <g id="g1082" transform="matrix(0.86666667,0,0,0.85677845,39.999999,42.966064)" style="stroke-width:1.16048"> <path id="path241" style="color:#000000;fill:#000000;stroke-linecap:round;-inkscape-stroke:none" d="M 169.23678 -49.88168 A 46.419449 46.419449 0 0 0 122.81475 -3.4618798 L 122.81475 55.162979 L 0.26592663 55.162979 A 46.419399 46.419399 0 0 0 -46.153845 101.58278 A 46.419399 46.419399 0 0 0 0.26592663 148.00258 L 116.47311 148.00258 C 109.84235 231.66594 84.892611 296.90624 9.8820624 349.53878 A 46.419399 46.419399 0 0 0 -1.4558282 414.20006 A 46.419399 46.419399 0 0 0 63.206882 425.53431 C 117.86118 387.18509 154.12427 339.35301 177.04552 287.17079 C 199.33296 323.41323 229.4691 356.59924 269.49745 384.68589 A 46.419399 46.419399 0 0 0 334.1579 373.34936 A 46.419399 46.419399 0 0 0 322.82227 308.69036 C 260.47406 264.94257 232.70979 212.49731 221.29282 148.00258 L 338.13101 148.00258 A 46.419399 46.419399 0 0 0 384.54853 101.58278 A 46.419399 46.419399 0 0 0 338.13101 55.162979 L 215.65655 55.162979 L 215.65655 -3.4618798 A 46.419449 46.419449 0 0 0 169.23678 -49.88168 z M 449.2518 206.90099 A 46.419399 46.419399 0 0 0 406.83443 236.2442 L 268.37064 586.39306 A 46.419399 46.419399 0 0 0 294.46965 646.62961 A 46.419399 46.419399 0 0 0 354.70403 620.53257 L 380.02103 556.50959 L 531.51743 556.50959 L 556.83443 620.53257 A 46.419399 46.419399 0 0 0 617.07106 646.62961 A 46.419399 46.419399 0 0 0 643.16556 586.39306 L 504.70403 236.2442 A 46.419399 46.419399 0 0 0 462.28666 206.90099 A 46.419399 46.419399 0 0 0 455.76923 207.4367 A 46.419399 46.419399 0 0 0 449.2518 206.90099 z M 455.76923 364.95582 L 494.80394 463.66999 L 416.73452 463.66999 L 455.76923 364.95582 z "></path> </g> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\LangController')->countLangs() }}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.menu.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Menus</h5>
                        <svg height="50" width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M1 12C1 11.4477 1.44772 11 2 11H22C22.5523 11 23 11.4477 23 12C23 12.5523 22.5523 13 22 13H2C1.44772 13 1 12.5523 1 12Z" fill="#0F0F0F"></path> <path d="M1 4C1 3.44772 1.44772 3 2 3H22C22.5523 3 23 3.44772 23 4C23 4.55228 22.5523 5 22 5H2C1.44772 5 1 4.55228 1 4Z" fill="#0F0F0F"></path> <path d="M1 20C1 19.4477 1.44772 19 2 19H22C22.5523 19 23 19.4477 23 20C23 20.5523 22.5523 21 22 21H2C1.44772 21 1 20.5523 1 20Z" fill="#0F0F0F"></path> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\MenuController')->countMenus() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.offer.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Offres</h5>
                        <svg height="50" width="50" viewBox="0 -1 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>briefcase</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-204.000000, -204.000000)" fill="#000000"> <path d="M234,217 L206,217 L206,212 C206,210.896 206.896,210 208,210 L232,210 C233.104,210 234,210.896 234,212 L234,217 L234,217 Z M218,220 C218,219.634 218.105,219.296 218.277,219 L221.723,219 C221.895,219.296 222,219.634 222,220 C222,221.104 221.104,222 220,222 C218.896,222 218,221.104 218,220 L218,220 Z M234,230 C234,231.104 233.104,232 232,232 L208,232 C206.896,232 206,231.104 206,230 L206,219 L216.142,219 C216.058,219.321 216,219.652 216,220 C216,222.209 217.791,224 220,224 C222.209,224 224,222.209 224,220 C224,219.652 223.942,219.321 223.858,219 L234,219 L234,230 L234,230 Z M216,207 C216,206.448 216.448,206 217,206 L223,206 C223.552,206 224,206.448 224,207 L224,208 L216,208 L216,207 L216,207 Z M232,208 L226,208 L226,206 C226,204.896 225.104,204 224,204 L216,204 C214.896,204 214,204.896 214,206 L214,208 L208,208 C205.791,208 204,209.791 204,212 L204,230 C204,232.209 205.791,234 208,234 L232,234 C234.209,234 236,232.209 236,230 L236,212 C236,209.791 234.209,208 232,208 L232,208 Z" id="briefcase" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\OfferController')->countOffers() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.page.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Pages</h5>
                        <svg height="50" width="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 2L16.5 2L21 6.5V19" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 20.5V6.5C3 5.67157 3.67157 5 4.5 5H14.2515C14.4106 5 14.5632 5.06321 14.6757 5.17574L17.8243 8.32426C17.9368 8.43679 18 8.5894 18 8.74853V20.5C18 21.3284 17.3284 22 16.5 22H4.5C3.67157 22 3 21.3284 3 20.5Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 8.4V5.35355C14 5.15829 14.1583 5 14.3536 5C14.4473 5 14.5372 5.03725 14.6036 5.10355L17.8964 8.39645C17.9628 8.46275 18 8.55268 18 8.64645C18 8.84171 17.8417 9 17.6464 9H14.6C14.2686 9 14 8.73137 14 8.4Z" fill="#000000" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">0</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.partner.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Partenaires</h5>
                        <svg height="50" width="50" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M326.527,171.735c-15.637-2.602-55.941-2.43-82.686,7.296c-26.752,9.725-75.397,40.124-89.988,44.997 c-14.591,4.859-15.81,24.322,17.02,27.964c32.836,3.654,62.018-17.028,69.313-20.669c7.296-3.654,77.826,7.296,77.826,7.296 l22.19,5.468l51.161,69.154c8.977-7.798,26.732-24.349,31.228-36.927c1.641-4.581,4.078-8.792,6.752-12.532l-72.49-99.977 C347.605,169.047,336.444,173.39,326.527,171.735z"></path> <path class="st0" d="M326.527,254.123l-10.752-1.085c-14.107-2.185-54-7.865-68.975-7.865c-0.662,0-1.185,0.007-1.576,0.026 c-0.602,0.344-1.298,0.742-1.98,1.139c-10.625,6.19-35.524,20.681-64.52,20.681c-3.178,0-6.362-0.179-9.46-0.523 c-4.7-0.523-8.832-1.331-12.486-2.35c3.462,1.516,6.653,3.688,9.381,6.475c4.29,4.383,6.944,9.758,7.997,15.379 c2.496-0.669,5.084-1.04,7.732-1.04c8.116,0,15.71,3.191,21.376,8.99c5.588,5.707,8.613,13.254,8.527,21.238 c0,0.079-0.013,0.159-0.013,0.238c8.083,0.026,15.644,3.218,21.297,8.99c5.587,5.707,8.613,13.253,8.527,21.238 c-0.027,2.754-0.45,5.441-1.198,8.024c5.733,1.198,10.983,4.051,15.18,8.341c11.532,11.791,11.327,30.757-0.457,42.29l-5.898,5.773 c0.026,0,0.053,0,0.079,0c9.917-0.715,18.265-6.832,20.602-16.048c4.038,3.184,9.122,5.097,14.664,5.097 c13.095,0,23.713-10.612,23.713-23.713c0-1.377-0.139-2.714-0.371-4.026c4.171,3.635,9.606,5.852,15.571,5.852 c13.095,0,23.714-10.619,23.714-23.713c2.807,1.172,5.885,1.827,9.116,1.827c13.101,0,23.713-10.619,23.713-23.713 c0-9.944-4.859-16.418-16.418-29.791L326.527,254.123z"></path> <path class="st0" d="M155.734,280.829c-5.918-6.044-15.61-6.15-21.654-0.238l-21.88,21.416c-6.044,5.912-6.15,15.604-0.238,21.648 c5.918,6.044,15.61,6.15,21.654,0.231l21.886-21.41C161.539,296.565,161.645,286.873,155.734,280.829z"></path> <path class="st0" d="M192.833,304.158c-5.912-6.051-15.604-6.157-21.648-0.239l-29.175,28.546 c-6.051,5.918-6.15,15.61-0.239,21.648c5.912,6.051,15.611,6.157,21.655,0.239l29.175-28.547 C198.645,319.894,198.751,310.202,192.833,304.158z"></path> <path class="st0" d="M222.643,334.624c-5.912-6.044-15.604-6.157-21.648-0.238l-29.175,28.553 c-6.044,5.911-6.15,15.603-0.238,21.654c5.912,6.038,15.604,6.144,21.655,0.225l29.175-28.546 C228.456,350.353,228.562,340.661,222.643,334.624z"></path> <path class="st0" d="M245.158,372.226c-5.912-6.044-15.604-6.156-21.648-0.238l-17.02,16.657 c-6.044,5.911-6.15,15.603-0.238,21.648c5.918,6.044,15.61,6.144,21.654,0.238l17.02-16.656 C250.971,387.963,251.07,378.271,245.158,372.226z"></path> <path class="st0" d="M510.606,234.991l-97.792-134.866c-2.364-3.27-6.925-3.991-10.189-1.628l-43.315,31.412 c-3.264,2.363-3.992,6.925-1.622,10.188L455.48,274.97c2.363,3.264,6.925,3.992,10.188,1.622l43.323-31.406 C512.248,242.815,512.977,238.254,510.606,234.991z M477.334,247.106c-5.435,3.945-13.042,2.727-16.987-2.708 c-3.939-5.435-2.728-13.035,2.714-16.98c5.435-3.946,13.035-2.728,16.981,2.701C483.98,235.56,482.769,243.167,477.334,247.106z"></path> <path class="st0" d="M144.784,261.63c2.304,0,4.555,0.292,6.739,0.788c-18.384-7.05-21.429-19.946-21.906-24.494 c-1.298-12.248,6.587-23.402,19.622-27.745c5.243-1.748,18.986-9.242,32.28-16.484c14.26-7.779,29.91-16.312,43.521-22.589 c-17.252-1.396-33.419-0.807-42.051,0.629c-9.295,1.549-19.675-2.164-28.553-6.944l-73.06,100.752 c2.191,3.29,4.157,6.892,5.54,10.771c2.046,5.72,6.839,12.26,12.3,18.43c0.854-1.099,1.761-2.172,2.781-3.171l21.879-21.416 C129.498,264.662,136.926,261.63,144.784,261.63z"></path> <path class="st0" d="M152.695,129.902l-43.323-31.406c-3.257-2.363-7.818-1.642-10.188,1.628L1.391,234.991 c-2.37,3.263-1.635,7.824,1.622,10.195l43.316,31.406c3.264,2.37,7.825,1.642,10.189-1.629l97.793-134.866 C156.68,136.834,155.952,132.272,152.695,129.902z M123.745,144.97c-3.939,5.428-11.546,6.646-16.981,2.701 c-5.442-3.94-6.654-11.546-2.708-16.981c3.939-5.435,11.546-6.653,16.981-2.708C126.479,131.928,127.684,139.528,123.745,144.97z"></path> </g> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\PartnerController')->countPartners() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.profile.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Profils</h5>
                        <svg height="50" width="50" fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M416,362.667h42.667c5.888,0,10.667-4.779,10.667-10.667v-42.667c0-5.888-4.779-10.667-10.667-10.667 S448,303.445,448,309.333v32h-32c-5.888,0-10.667,4.779-10.667,10.667C405.333,357.888,410.112,362.667,416,362.667z"></path> <path d="M421.184,384.96l-81.728-20.416l-6.955-27.819c21.867-21.653,36.864-51.392,41.301-81.92 c12.117-3.392,21.504-13.803,23.125-26.837l5.333-42.667c1.131-9.003-1.643-18.091-7.595-24.939 c-3.499-4.011-7.915-7.061-12.821-8.917l1.963-40.171l7.979-7.979c12.011-12.8,21.973-34.709,1.152-66.475 C376.917,12.395,349.739,0,312.128,0c-14.827,0-49.024,0-80.875,21.376C140.352,23.275,128,65.472,128,106.667 c0,9.579,2.325,31.147,3.861,44.16c-5.483,1.728-10.453,4.907-14.336,9.323c-6.059,6.869-8.896,16.043-7.765,25.173l5.333,42.667 c1.728,13.888,12.309,24.832,25.643,27.435c4.437,29.312,18.624,58.112,39.232,79.403l-7.424,29.739l-81.728,20.416 C37.333,398.336,0,446.187,0,501.333C0,507.221,4.779,512,10.667,512h490.667c5.888,0,10.667-4.821,10.667-10.709 C512,446.187,474.667,398.336,421.184,384.96z"></path> <path d="M416,21.333h32v32C448,59.221,452.779,64,458.667,64s10.667-4.779,10.667-10.667V10.667 C469.333,4.779,464.555,0,458.667,0H416c-5.888,0-10.667,4.779-10.667,10.667S410.112,21.333,416,21.333z"></path> <path d="M53.333,362.667H96c5.888,0,10.667-4.779,10.667-10.667c0-5.888-4.779-10.667-10.667-10.667H64v-32 c0-5.888-4.779-10.667-10.667-10.667s-10.667,4.779-10.667,10.667V352C42.667,357.888,47.445,362.667,53.333,362.667z"></path> <path d="M53.333,64C59.221,64,64,59.221,64,53.333v-32h32c5.888,0,10.667-4.779,10.667-10.667S101.888,0,96,0H53.333 c-5.888,0-10.667,4.779-10.667,10.667v42.667C42.667,59.221,47.445,64,53.333,64z"></path> </g> </g> </g> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\ProfileController')->countProfiles() }}</span>
                </a>
            </div>
        </div>
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.skill.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Skills</h5>
                        <svg height="50" width="50" fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 232.688 232.688" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="XMLID_350_"> <g id="XMLID_351_"> <path id="XMLID_352_" d="M97.688,61.344h120c8.284,0,15-6.716,15-15s-6.716-15-15-15h-120c-8.284,0-15,6.716-15,15 S89.403,61.344,97.688,61.344z"></path> </g> <g id="XMLID_439_"> <path id="XMLID_440_" d="M217.688,101.344h-120c-8.284,0-15,6.716-15,15s6.716,15,15,15h120c8.284,0,15-6.716,15-15 S225.972,101.344,217.688,101.344z"></path> </g> <g id="XMLID_441_"> <path id="XMLID_443_" d="M217.688,171.344h-120c-8.284,0-15,6.716-15,15c0,8.284,6.716,15,15,15h120c8.284,0,15-6.716,15-15 C232.688,178.06,225.972,171.344,217.688,171.344z"></path> </g> <g id="XMLID_444_"> <path id="XMLID_445_" d="M48.785,104.408l-9.989-1.452l-4.467-9.052c-1.264-2.56-3.87-4.181-6.726-4.181 c-2.854,0-5.462,1.621-6.726,4.181l-4.468,9.052l-9.988,1.452c-2.825,0.41-5.173,2.389-6.055,5.104 c-0.882,2.715-0.146,5.695,1.897,7.688l7.228,7.045l-1.707,9.949c-0.483,2.814,0.674,5.658,2.983,7.336 c1.307,0.95,2.853,1.433,4.409,1.433c1.193,0,2.392-0.285,3.489-0.861l8.936-4.698l8.936,4.698 c1.098,0.577,2.296,0.861,3.489,0.861c0.007,0,0.015,0,0.021,0c4.142-0.001,7.499-3.358,7.499-7.5 c0-0.629-0.077-1.241-0.223-1.825l-1.612-9.393l7.228-7.045c2.045-1.993,2.78-4.973,1.898-7.688 C53.958,106.797,51.61,104.818,48.785,104.408z"></path> </g> <g id="XMLID_446_"> <path id="XMLID_447_" d="M48.785,34.408l-9.989-1.452l-4.467-9.052c-1.264-2.56-3.87-4.181-6.726-4.181 c-2.854,0-5.462,1.621-6.726,4.181l-4.468,9.052l-9.988,1.452c-2.825,0.41-5.173,2.389-6.055,5.104 c-0.882,2.715-0.146,5.695,1.897,7.688l7.228,7.045l-1.707,9.949c-0.483,2.814,0.674,5.658,2.983,7.336 c1.307,0.95,2.853,1.433,4.409,1.433c1.193,0,2.392-0.285,3.489-0.861l8.936-4.698l8.936,4.698 c1.098,0.577,2.296,0.861,3.489,0.861c0.007,0,0.015,0,0.021,0c4.142,0,7.499-3.358,7.499-7.5c0-0.629-0.077-1.241-0.223-1.825 l-1.612-9.393l7.228-7.045c2.045-1.993,2.78-4.973,1.898-7.688C53.958,36.797,51.61,34.818,48.785,34.408z"></path> </g> <g id="XMLID_448_"> <path id="XMLID_449_" d="M48.785,174.408l-9.989-1.452l-4.467-9.052c-1.264-2.56-3.87-4.181-6.726-4.181 c-2.854,0-5.462,1.621-6.726,4.181l-4.468,9.052l-9.988,1.452c-2.825,0.41-5.173,2.389-6.055,5.104 c-0.882,2.715-0.146,5.695,1.897,7.688l7.228,7.045l-1.707,9.949c-0.483,2.814,0.674,5.658,2.983,7.336 c1.307,0.95,2.853,1.433,4.409,1.433c1.193,0,2.392-0.285,3.489-0.861l8.936-4.698l8.936,4.698 c1.098,0.577,2.296,0.861,3.489,0.861c0.007,0,0.015,0,0.021,0c4.142-0.001,7.499-3.358,7.499-7.5 c0-0.629-0.077-1.241-0.223-1.825l-1.612-9.393l7.228-7.045c2.045-1.993,2.78-4.973,1.898-7.688 C53.958,176.797,51.61,174.818,48.785,174.408z"></path> </g> </g> </g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\SkillController')->countSkills() }}</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="mx-3" style="max-width:14%;">
            <div class="card square-card text-center">
                <a href="{{ route('back789658.template.index') }}" class="card-home">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold mb-3 float-none">Templates</h5>
                        <svg height="50" width="50" viewBox="0 0 24 24" id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:#080808;}</style></defs><title>template</title><path class="cls-1" d="M21,.5H3a2,2,0,0,0-2,2V22a2,2,0,0,0,2,2H21a2,2,0,0,0,2-2V2.5A2,2,0,0,0,21,.5Zm0,2v2H3v-2ZM3,22V6.5H21V22Z"></path><path class="cls-1" d="M12.5,4H20a.5.5,0,0,0,0-1H12.5a.5.5,0,0,0,0,1Z"></path><path class="cls-1" d="M4.5,4a.43.43,0,0,0,.19,0,.35.35,0,0,0,.16-.11A.47.47,0,0,0,5,3.5a.43.43,0,0,0,0-.19.36.36,0,0,0-.11-.16.5.5,0,0,0-.7,0A.35.35,0,0,0,4,3.31.43.43,0,0,0,4,3.5a.51.51,0,0,0,.5.5Z"></path><path class="cls-1" d="M5.65,3.85A.36.36,0,0,0,5.81,4,.44.44,0,0,0,6,4a.47.47,0,0,0,.35-.15.36.36,0,0,0,.11-.16.6.6,0,0,0,0-.19.51.51,0,0,0-.15-.35A.49.49,0,0,0,5.81,3a.36.36,0,0,0-.16.11.47.47,0,0,0-.15.35.4.4,0,0,0,0,.19A.35.35,0,0,0,5.65,3.85Z"></path><path class="cls-1" d="M8,8H4.5a1,1,0,0,0,0,2H8A1,1,0,0,0,8,8Z"></path><path class="cls-1" d="M8,11.67H4.5a1,1,0,0,0,0,2H8a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M8,15.33H4.5a1,1,0,0,0,0,2H8a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M8,19H4.5a1,1,0,0,0,0,2H8a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M14,8H10.5a1,1,0,0,0,0,2H14a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M14,11.67H10.5a1,1,0,0,0,0,2H14a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M14,15.33H10.5a1,1,0,0,0,0,2H14a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M14,19H10.5a1,1,0,0,0,0,2H14a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M19.5,8h-3a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M19.5,11.67h-3a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M19.5,15.33h-3a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"></path><path class="cls-1" d="M19.5,19h-3a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"></path></g></svg>
                    </div>
                    <span class="badge rounded-pill position-absolute badge-nb-data">{{ app('App\Http\Controllers\Admin\TemplateController')->countTemplates() }}</span>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection