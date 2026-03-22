function enableDialogCloseOutside(dialog) {
    if (!dialog) return;

    dialog.addEventListener('click', (event) => {
        const form = dialog.querySelector('form');
        if (!form) return;

        if (!form.contains(event.target)) {
            dialog.close();
        }
    });
}

function openDialog(dialog) {
    if (!dialog) return;
    dialog.showModal();
}

function setupDialogTriggers(triggerClass, dialog) {
    if (!dialog) return;

    const triggers = document.querySelectorAll(`${triggerClass}`);
    if (!triggers.length) return;

    triggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            openDialog(dialog);
        });
    });
}

(function () {
    const form = document.querySelector('[data-js="multi-step-contact"]');
    if (!form) return;

    const StepState = (function () {
        let current = 1;
        return {
            get() {
                return current;
            },
            set(step) {
                current = step;
            },
            increment(max) {
                if (current < max) current++;
            },
            decrement() {
                if (current > 1) current--;
            }
        };
    })();

    const steps = [...form.querySelectorAll('.step-form-item')];
    const totalSteps = steps.length;

    const indicators = [...form.querySelectorAll('.indicator-stepper .step')];

    const nextBtn = form.querySelector('.btn:not(.go-back):not([type="submit"])');
    const prevBtn = form.querySelector('.btn.go-back');

    const submitBtn = form.querySelector('[type="submit"]');
    const success = form.querySelector('.submit-success-feedback');

    function updateUI() {
        updateSteps();
        updateButtons();
        updateStepper();
    }

    function updateSteps() {
        steps.forEach(step => {
            const stepNumber = Number(step.dataset.step);
            step.classList.toggle('active', stepNumber === StepState.get());
        });
    }

    function updateButtons() {
        prevBtn.classList.toggle('show', StepState.get() > 1);

        if (StepState.get() === totalSteps) {
            nextBtn.classList.remove('show');
            submitBtn.classList.add('show');

            return;
        }

        nextBtn.classList.add('show');
        submitBtn.classList.remove('show');
    }

    function updateStepper() {
        indicators.forEach(indicator => {
            const stepNumber = Number(indicator.dataset.step);
            indicator.classList.remove('active', 'completed');

            if (stepNumber === StepState.get()) indicator.classList.add('active');
            if (stepNumber < StepState.get()) indicator.classList.add('completed');
        });
    }

    function validateStep() {
        const current = steps.find(s => Number(s.dataset.step) === StepState.get());
        const inputs = [...current.querySelectorAll('input')];

        const isValid = inputs.every(input => input.checkValidity());
        if (!isValid) inputs.forEach(input => input.reportValidity());

        return isValid;
    }

    function nextStep() {
        if (!validateStep()) return;
        StepState.increment(totalSteps);
        updateUI();
    }

    function prevStep() {
        StepState.decrement();
        updateUI();
    }

    function goToStep(step) {
        if (StepState.get() == totalSteps) return;

        if (step <= StepState.get()) {
            StepState.set(step);
            updateUI();
        }
    }

    function handleSubmit(e) {
        e.preventDefault();

        steps.forEach(step => step.classList.remove('active'));
        nextBtn.classList.remove('show');
        prevBtn.classList.remove('show');
        submitBtn.classList.remove('show');
        success.classList.add('active');

        indicators.forEach(indicator => {
            indicator.classList.remove('active');
            indicator.classList.add('completed');
        });
    }

    nextBtn.addEventListener('click', e => {
        e.preventDefault();
        nextStep();
    });

    prevBtn.addEventListener('click', e => {
        e.preventDefault();
        prevStep();
    });

    form.addEventListener('submit', handleSubmit);

    indicators.forEach(indicator => {
        indicator.addEventListener('click', () => {
            const step = Number(indicator.dataset.step);
            goToStep(step);
        });
    });

    updateUI();
})();

function ContactFormStepDialogTriggers() {
    const dialog = document.querySelector('[data-js="multi-step-contact"]');
    if (!dialog) return;
    
    enableDialogCloseOutside(dialog);
    setupDialogTriggers('.open-contact-modal', dialog);
}

document.addEventListener('DOMContentLoaded', () => {
    ContactFormStepDialogTriggers();
});