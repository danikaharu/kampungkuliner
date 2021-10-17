<?php include 'app/controller/user/function.php'; ?>
<section class="lapak">
        <div class="container">
            <h2 class="lapak-head">Lapak - Lapak Kampung Wisata Kuliner Om Yoso</h2>
            
              <?php tampil_daftar_lapak($base_url,$mysqli); ?>
            







            <!-- <div class="lapak-pagination">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> -->
        </div>
    </section>  