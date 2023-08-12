<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XI - About</title>

    <link rel="stylesheet" href="/assets/css/about.css">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/85c74e2c47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="nav-head">
                <a href="/">SEWELAS SIJI</a>
            </div>
            <div class="nav-auth">
                @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            @role('user')
                                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard User</a>
                            @endrole
                            @role('staff')
                                <a href="{{ url('/staff/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard Staff</a>
                            @endrole
                            @role('admin')
                                <a href="{{ url('/admin/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard Admin</a>
                            @endrole
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">LOGIN</a>
                            @endauth
                        </div>
                @endif
            </div>
        </div>
    </nav>

    <div class="navbar-support">
        <div class="navbar-support-items">
            <a href="">INSTAGRAM</a>
            <a href="/about">ABOUT</a>
            <a href="{{route('post.index')}}">POST</a>
            <a href="{{route('photo.index')}}">GALLERY</a>
            <a href="{{route('achievement.index')}}">ACHIEVEMENT</a>
        </div>
    </div>

    <div class="menu">
        <div class="hamburger-items">
            <div class="hamburger-items-list">
                <a href="">INSTAGRAM</a>
            </div>
            <div class="hamburger-items-list">
                <a href="/about">ABOUT</a>
            </div>
            <div class="hamburger-items-list">
                <a href="{{route('post.index')}}">POST</a>
            </div>
            <div class="hamburger-items-list">
                <a href="{{route('photo.index')}}">GALLERY</a>
            </div>
            <div class="hamburger-items-list">
                <a href="{{route('achievement.index')}}">ACHIEVEMENT</a>
            </div>
            <div class="hamburger-items-list">
                <div class="hamburger-items-list-auth">
                    @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                @role('user')
                                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard User</a>
                                @endrole
                                @role('staff')
                                    <a href="{{ url('/staff/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard Staff</a>
                                @endrole
                                @role('admin')
                                    <a href="{{ url('/admin/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard Admin</a>
                                @endrole
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">LOGIN</a>
                                @endauth
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <button class="hamburger">
        <!-- material icons https://material.io/resources/icons/ -->
        <i class="menuIcon material-icons">menu</i>
    </button>

    <div class="about-header">
        <div class="about-header-text">
            <h2>WHO WE ARE?</h2>
        </div>
        <div class="about-header-since">
            Since 17 July 2023
        </div>
    </div>

    <div class="structure-head">
        <p>STRUKTURAL KELAS</p>
    </div>

    <div class="structure">
        <div class="structure-content">
            <div class="structure-content-body">
                <p>Pak Tri</p>
                <div class="structure-rank">
                    Wali Kelas
                </div>
            </div>
            <div class="structure-content-body">
                <p>Rico Marcel Febriano</p>
                <div class="structure-rank">
                    Ketua Kelas
                </div>
            </div>
            <div class="structure-content-body">
                <p>Abiyan Mirza Iksan Afareza</p>
                <div class="structure-rank">
                    Wakil Ketua Kelas
                </div>
            </div>
            <div class="structure-content-body">
                <p>Naudia Syalwa Oktavia</p>
                <div class="structure-rank">
                    Sekretaris 1
                </div>
            </div>
            <div class="structure-content-body">
                <p>Dicky Saputra</p>
                <div class="structure-rank">
                    Sekretaris 2
                </div>
            </div>
            <div class="structure-content-body">
                <p>Sabrina Yoshi Pratiwi</p>
                <div class="structure-rank">
                    Bendahara 1
                </div>
            </div>
            <div class="structure-content-body">
                <p>Ghanta Maharadu</p>
                <div class="structure-rank">
                    Bendahara 2
                </div>
            </div>
        </div>
    </div>
@role('admin')
    <div class="container">
        <h1>Daftar Nama</h1>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Absen</th>
                <th>Nama</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>ABIYAN MIRZA IKSAN AFAREZA</td>
              </tr>
              <tr>
                <td>2</td>
                <td>ADELLIA AZZURA ARROSYID</td>
              </tr>
              <tr>
                <td>3</td>
                <td>ANJELI ERMA APRILIA </td>
              </tr>
              <tr>
                <td>4</td>
                <td>DAMAR WULAN DZULFAQOR</td>
              </tr>
              <tr>
                <td>5</td>
                <td>DANIEL JAYA SAMPOERNA</td>
              </tr>
              <tr>
                <td>6</td>
                <td>DAVIN MAULANA BRILLIANSYAH</td>
              </tr>
              <tr>
                <td>7</td>
                <td>DENISHA PUTRI RAMADHANI</td>
              </tr>
              <tr>
                <td>8</td>
                <td>DICKY SAPUTRA</td>
              </tr>
              <tr>
                <td>9</td>
                <td>FAHREL ALRIDHO SUPRAJITNO</td>
              </tr>
              <tr>
                <td>10</td>
                <td>FEBRY MAULANA ARYANSYA</td>
              </tr>
              <tr>
                <td>11</td>
                <td>FIOLALITA JUNIA RAMASARI</td>
              </tr>
              <tr>
                <td>12</td>
                <td>GERHARD REINOLD SIAGIAN</td>
              </tr>
              <tr>
                <td>13</td>
                <td>GHANTA MAHARADU</td>
              </tr>
              <tr>
                <td>14</td>
                <td>JUSTIN MICHAEL LUMINTANG</td>
              </tr>
              <tr>
                <td>15</td>
                <td>MIKY ALVIN RAMADHANI</td>
              </tr>
              <tr>
                <td>16</td>
                <td>MOCHAMMAD RIZAL SUNGKAR</td>
              </tr>
              <tr>
                <td>17</td>
                <td>MUHAMMAD DAFFAREL ADE YUWAN SUBOWO</td>
              </tr>
              <tr>
                <td>18</td>
                <td>MUHAMMAD HASAN ABDILLAH</td>
              </tr>
              <tr>
                <td>19</td>
                <td>MUHAMMAD RAFIKY YAHYA</td>
              </tr>
              <tr>
                <td>20</td>
                <td>MUHAMMAD RIFKI ABDILLAH MAULANA</td>
              </tr>
              <tr>
                <td>21</td>
                <td>MUHAMMAD TITO ILHAM</td>
              </tr>
              <tr>
                <td>22</td>
                <td>NAUDIA SYALWA OKTAVIA</td>
              </tr>
              <tr>
                <td>23</td>
                <td>NAURA GISCANIA ALNATYESA</td>
              </tr>
              <tr>
                <td>24</td>
                <td>RADITYO PRAHMANA PUTRA</td>
              </tr>
              <tr>
                <td>25</td>
                <td>RICO MARCEL FEBRIANO</td>
              </tr>
              <tr>
                <td>26</td>
                <td>SABRINA YOSI PRATIWI</td>
              </tr>
              <tr>
                <td>28</td>
                <td>SALSABILAH INDAH WIDIANA SUWANDI</td>
              </tr>
              <tr>
                <td>29</td>
                <td>VAREL PRAMANA PUTRA</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endrole

    <script src="/assets/js/index.js"></script>
</body>
</html>