<?php

/** @return string|false */
function json_encode($value, int $options = 0, int $depth = 512) {}

/** @return mixed */
function json_decode(string $json, ?bool $assoc = null, int $depth = 512, int $options = 0) {}

function json_last_error(): int {}

function json_last_error_msg(): string {}
