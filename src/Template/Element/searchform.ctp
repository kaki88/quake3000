<div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="search-box map">
                        <form role="form" id="form-map" class="form-map form-search">
                            <h2>Rechercher un bien</h2>
                            <div class="form-group">
                                <input name="city" type="text" class="form-control" id="search-box-property-id" placeholder="Ville">
                            </div>
                            <div class="form-group">
                                <input name="zipcode" type="text" class="form-control" id="search-box-property-idd" placeholder="Code postal">
                            </div>
                            <div class="form-group">
                                <select name="typeoffre">
                                    <option value="">Type d'offre</option>
                                    <option value="1">Location</option>
                                    <option value="2">Vente</option>
                                    <option value="3">Location ou Vente</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="typebien">
                                    <option value="">Type de bien</option>
                                    <option value="1">Bureau</option>
                                    <option value="2">Commerce</option>
                                    <option value="3">Entrepôt</option>
                                    <option value="4">Industrie</option>
                                    <option value="5">Terrain</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <?= $this->Form->input('Departement', ['options' => $query, 'name' => __('Select an Example')]); ?>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="district">
                                    <option value="">District</option>
                                    <option value="1">Manhattan</option>
                                    <option value="2">The Bronx</option>
                                    <option value="3">Brooklyn</option>
                                    <option value="4">Queens</option>
                                    <option value="5">Staten Island</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <select name="property-type">
                                    <option value="">Property Type</option>
                                    <option value="1">Apartment</option>
                                    <option value="2">Condominium</option>
                                    <option value="3">Cottage</option>
                                    <option value="4">Flat</option>
                                    <option value="5">House</option>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <div class="price-range">
                                    <input id="price-input" type="text" name="price" value="1000;299000">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Search Now</button>
                            </div><!-- /.form-group -->
                        </form><!-- /#form-map -->
                    </div><!-- /.search-box.map -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
