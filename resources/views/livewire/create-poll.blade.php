<<!-- resources/views/livewire/create-poll.blade.php -->
<form wire:submit.prevent="createPoll">
    <label for="question">Question du sondage:</label>
    <input type="text" wire:model="question">

    <!-- Autres champs pour les options, etc. -->

    <button type="submit">Créer le sondage</button>
</form>
