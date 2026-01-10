install:
	composer install

.PHONY: brain-games

start:
	./bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

.PHONY: brain-even

brain-even:
	./bin/brain-even

.PHONY: brain-calc

brain-calc:
	./bin/brain-calc

.PHONY: brain-gcd

brain-gcd:
	./bin/brain-gcd

.PHONY: brain-progression

brain-progression:
	./bin/brain-progression

.PHONY: brain-prime

brain-prime:
	./bin/brain-prime
