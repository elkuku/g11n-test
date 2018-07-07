document.write(g11n3t('Hello test'));
document.write('<br>');

// Parameters
document.write(g11n3t('Hello %param% test', {'%param%': 'ACME'}));
document.write('<br>');

// Pluralization
for (i = 0; i < 4; i++) {
    document.write(g11n4t(
        'There is one monkey in the box.',
        'There are %d monkeys in the box.',
        i
    ).replace('%d', i));
    document.write('<br>');
}

// Pluralization with parameter
document.write(g11n4t(
    'There is one monkey in %param% town.',
    'There are %d monkeys in %param% town.',
    1,
    {'%param%' : 'ACME'}
));
document.write('<br>');
