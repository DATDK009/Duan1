<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto">
            <div class="card adaptable-card">
                <div class="card-body">
                    <div class="lg:flex items-center justify-between mb-4">
                        <h3 class="mb-4 lg:mb-0">List Orders</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table id="product-list-data-table" class="table-default table-hover data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Directory Code</th>
                                    <th>Name Account</th>
                                    <th>Product</th>
                                    <th>Total</th>
                                    <th>Date Order</th>
                                    <th>Price</th>
                                </tr>

                            <tbody>
                                <?php
                                foreach ($listdonhang as $donhang) {
                                    extract($donhang);
                                    $xoadh = "index.php?act=xoadh&id=" . $id;


                                    echo '<tr>
                            
                                        <td>' . $id . '</td>
                                        <td>' . $id_bill . '</td>
                                        <td>' . $username . '</td>
                                        <td>' . $sanpham_bill . '</td>
                                        <td>' . $so_luong . '</td>
                                        <td>' . $ngaydathang . '</td>
                                        <td>' . $total . '</td>  
                           
                                        <td>
																<div class="flex justify-end text-lg">
																	<span class="cursor-pointer p-2 hover:text-red-500">
																		<a href="' . $xoadh . '"><svg stroke="currentColor" fill="none"
																		stroke-width="2" viewBox="0 0 24 24"
																		aria-hidden="true" height="1em" width="1em"
																		xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round"
																			stroke-linejoin="round"
																			d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
																		</path>
																	</svg></a>
																	</span>
																</div>
															</td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
        </div>
    </div>
</main>
<!-- Content end -->