<form action="{{ route('fiches.store') }}" method="POST" enctype="multipart/form-data" class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    @csrf

    <div class="mb-6">
        <h4 class="text-lg font-semibold text-gray-800 dark:text-white">Partager une fiche de révision</h4>
        <label for="category" class="block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">Catégorie</label>
        <select name="category" id="category" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" required>
            <option value="">Choisir une catégorie</option>
            <option value="Mathématiques">Mathématiques</option>
            <option value="Physique">Physique</option>
            <option value="Chimie">Chimie</option>
            <option value="Informatique">Informatique</option>
            <option value="Français">Français</option>
            <option value="Anglais">Anglais</option>
            <option value="Histoire">Histoire</option>
            <option value="Géographie">Géographie</option>
            <option value="Philosophie">Philosophie</option>
            <option value="Biologie">Biologie</option>
            <option value="Économie">Économie</option>
            <option value="Droit">Droit</option>
            <option value="Autre">Autre</option>
        </select>
    </div>

    <div class="mb-6">
        <label for="level" class="block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">Niveau d'études</label>
        <input type="text" name="level" id="level" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" placeholder="Ex : Université, Lycée" required>
    </div>

    <div class="mb-6">
        <label for="title" class="block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">Titre</label>
        <input type="text" name="title" id="title" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" required>
    </div>

    <div class="mb-6">
        <label for="description" class="block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">Description</label>
        <textarea name="description" id="description" class="py-2 px-3 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" rows="4" required></textarea>
    </div>

    <div class="mb-6">
        <label for="file" class="block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">Choisir un fichier</label>
        <input type="file" name="file" id="file" accept=".jpeg,.png,.pdf" class="block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" required>
        <button type="button" class="mt-2 py-2 px-4 bg-blue-600 text-white rounded-lg" onclick="previewFile()">Prévisualiser</button>
    </div>

    <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg bg-blue-600 text-white hover:bg-blue-700">
        Envoyer la fiche
    </button>
</form>

<script>
    function previewFile() {
        const file = document.getElementById('file').files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                window.open(e.target.result, '_blank');
            };
            reader.readAsDataURL(file);
        } else {
            alert("Aucun fichier sélectionné pour prévisualiser.");
        }
    }
</script>
