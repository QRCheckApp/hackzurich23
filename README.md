# Z-Chat - Your 24/7 Zurich Insurance Companion!

## Inspiration

We were inspired by the need to make Zurich Insurance more accessible to its customers. We recognized that many customers already use messaging applications, so we thought, why not leverage this existing behavior? This led us to conceptualize Z-Chat, a chatbot designed to integrate seamlessly with existing messenger applications, thus enabling Zurich's customers to access information easily and securely.

## What it does

Z-Chat is a versatile chatbot designed to communicate across various interfaces, thus providing the user with the necessary information tailored to their specific needs. It leverages Generative AI to craft responses in real-time, enabling customers to receive answers anytime, even at night or on a weekend day. It can be integrated with any messaging application, eliminating the need for customers to download additional software. They can simply start asking questions and receive answers in real-time.

## How we built it

We leveraged the Threema API to connect an AI model from Zurich with the customers. This approach is relatively straightforward and allows for secure communication via end-to-end encryption.

## Accomplishments that we're proud of

We are particularly proud of our innovative approach to integrating Z-Chat into existing messaging applications, specifically Threema, which provides end-to-end encryption for secure data transmission. This means users don’t have to download anything new and can start asking questions right away.

## What's next for Z-Chat

Our next step is to integrate Z-Chat with real data and initiate a pilot program with a small group of Zurich customers. This will allow us to test the system, make necessary adjustments, and ultimately roll it out to all Zurich customers.

## Setup dev environment

1. Install PHP and Composer on your machine
2. Install [Docker](https://docs.docker.com/get-docker/) on your machine
3. Start Docker
4. Run `./vendor/bin/sail up`
