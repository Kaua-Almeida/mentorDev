<?php

use App\Config\Database;
use App\DAO\MentoringDAO;

 $data = new MentoringDAO(Database::connection());
 $dataMentoring = $data->findAllMentoring();

?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Mentorias</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>img</th>
                                            <th>Mentoria</th>
                                            <th>descrição</th>
                                            <th>data</th>
                                            <th>Horários disponiveis</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>img</th>
                                            <th>Mentoria</th>
                                            <th>descrição</th>
                                            <th>data</th>
                                            <th>Horários disponiveis</th>
                                            <th>status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($dataMentoring as $mentoring):?>
                                        <tr>
                                               <td class="d-flex">
                                                <img src="https://blog.aevo.com.br/wp-content/uploads/2020/10/inovacao-tecnologica-mercado.jpg" alt="imagem tecnológica" class="align-self-center mx=auto" height="60px" width="100"></td>
                                            <td><?php echo $mentoring["title"]?></td>
                                            <td><?php echo $mentoring["description"]?></td>
                                            <td><?php echo  date("d:m:Y",strtotime($mentoring["date_event"]))?></td>
                                            <td><?php echo $mentoring["time_event"]?></td>
                                            <td><?php echo $mentoring["status"]?></td>
                                        </tr>
                                        <?php endforeach;?>
                                      
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>