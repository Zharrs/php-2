<form  action="thanks.php"  method="post">
  <div>
        <label  for="user_Prenom">Prenom :</label>
      <input  type="text"  id="user_Prenom"  name="user_Prenom">
    </div>
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
      <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="telNo">phone :</label>
      <input id="telNo" name="telNo" type="tel">
    </div>
    <label for="pet-select">Choose a pet:</label>
<select name="pets" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
