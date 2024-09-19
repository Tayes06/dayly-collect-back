<div class="modal fade" tabindex="-1" id="createClientModal" aria-labelledby="createClientModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Ajout d'un client</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="/client.store">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" required class="form-control" name="nom_client" id="nom" placeholder="Entrez votre nom">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom_client" placeholder="Entrez votre prénom">
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="tel" name="telephone_client" required class="form-control" id="telephone"
                            placeholder="Entrez votre numéro de téléphone">
                    </div>
                    <div class="mb-3">
                        <label for="sexe" class="form-label">Sexe</label>
                        <select class="form-select" name="sexe_client" required id="sexe">
                            <option value="">Sélectionnez votre sexe</option>
                            <option value="M">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Âge</label>
                        <input type="number" name="age" required class="form-control" id="age" placeholder="Entrez votre âge"
                            min="10" max="100">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Utilisateur</label>
                        <input type="text" name="id_user" class="form-control" disabled value="U492R" placeholder="U492R" >
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Adresse client</label>
                        <input type="text" name="adresse_client" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="cni_client" class="form-label">CNI</label>
                        <input type="text" name="cni_client" class="form-control" id="cni_client"
                            placeholder="Entrez votre mot de passe">
                    </div>
                </div>

                <!-- formulaire contenant le nom, le prenom, le telephone, le sexe l'age , le username et le password -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>